const accessToken = "L5JTXOLBMPJGT4XYYXZXL27DWPAUXHDN"; // Remplace par ton jeton d'accès Wit.ai
const baseUrl = "https://api.wit.ai/message?v=20241016"; // URL de l'API Wit.ai
const loader = `<span class='loader'><span class='loader__dot'></span><span class='loader__dot'></span><span class='loader__dot'></span></span>`;
const errorMessage =
    "Désolé, je ne peux pas vous aider pour le moment, mais vous pouvez appeler notre équipe de support directement au 0123456789.";
const $document = document;
const $chatbot = $document.querySelector(".chatbot");
const $chatbotMessageWindow = $document.querySelector(
    ".chatbot__message-window"
);
const $chatbotHeader = $document.querySelector(".chatbot__header");
const $chatbotMessages = $document.querySelector(".chatbot__messages");
const $chatbotInput = $document.querySelector(".chatbot__input");
const $chatbotSubmit = $document.querySelector(".chatbot__submit");

const botLoadingDelay = 1000;
const botReplyDelay = 2000;

const loadCourses = async () => {
    try {
        const response = await fetch("/cours.json"); // Chemin vers ton fichier JSON
        if (!response.ok) {
            throw new Error("Erreur lors du chargement du fichier JSON");
        }
        const data = await response.json();
        console.log(data); // Afficher le contenu JSON dans la console

        // Si tu veux voir les cours en particulier
        console.log("Cours disponibles:", data.cours);
    } catch (error) {
        console.error("Erreur:", error);
    }
};

// Appeler la fonction pour charger et afficher le contenu
loadCourses();

document.addEventListener(
    "keypress",
    (event) => {
        if (event.which == 13) validateMessage();
    },
    false
);

$chatbotHeader.addEventListener(
    "click",
    () => {
        toggle($chatbot, "chatbot--closed");
        $chatbotInput.focus();
    },
    false
);

$chatbotSubmit.addEventListener(
    "click",
    () => {
        validateMessage();
    },
    false
);

const toggle = (element, klass) => {
    const classes = element.className.match(/\S+/g) || [],
        index = classes.indexOf(klass);
    index >= 0 ? classes.splice(index, 1) : classes.push(klass);
    element.className = classes.join(" ");
};

const userMessage = (content) => {
    $chatbotMessages.innerHTML += `<li class='is-user animation'>
      <p class='chatbot__message'>
        ${content}
      </p>
      <span class='chatbot__arrow chatbot__arrow--right'></span>
    </li>`;
};

const aiMessage = (content, isLoading = false, delay = 0) => {
    setTimeout(() => {
        removeLoader();
        $chatbotMessages.innerHTML += `<li 
      class='is-ai animation' 
      id='${isLoading ? "is-loading" : ""}'>
        <div class="is-ai__profile-picture">
          <svg class="icon-avatar" viewBox="0 0 32 32">
            <use xlink:href="#avatar" />
          </svg>
        </div>
        <span class='chatbot__arrow chatbot__arrow--left'></span>
        <div class='chatbot__message'>${content}</div>
      </li>`;
        scrollDown();
    }, delay);
};

const removeLoader = () => {
    let loadingElem = document.getElementById("is-loading");
    if (loadingElem) $chatbotMessages.removeChild(loadingElem);
};

const escapeScript = (unsafe) => {
    const safeString = unsafe
        .replace(/</g, " ")
        .replace(/>/g, " ")
        .replace(/&/g, " ")
        .replace(/"/g, " ")
        .replace(/\\/, " ")
        .replace(/\s+/g, " ");
    return safeString.trim();
};

const validateMessage = () => {
    const text = $chatbotInput.value;
    const safeText = text;

    if (safeText.length && safeText !== " ") {
        resetInputField();
        userMessage(safeText);
        getIntents(safeText); // Appeler la fonction getIntents
    }
    scrollDown();
    return;
};

const resetInputField = () => {
    $chatbotInput.value = "";
};

const scrollDown = () => {
    const distanceToScroll =
        $chatbotMessageWindow.scrollHeight -
        ($chatbotMessages.lastChild.offsetHeight + 60);
    $chatbotMessageWindow.scrollTop = distanceToScroll;
    return false;
};

//Fonction getIntents pour analyser le message utilisateur avec Wit.ai
const getIntents = (text) => {
    fetch(`${baseUrl}&q=${encodeURIComponent(text)}`, {
        method: "GET",
        headers: {
            Authorization: `Bearer ${accessToken}`,
            "Content-Type": "application/json; charset=utf-8",
        },
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error("Erreur réseau");
            }
            // console.log(response.json());
            return response.json();
        })
        .then((res) => {
            console.log("Réponse complète de Wit.ai:", res); // Afficher la réponse complète

            // Vérifier si des intents sont présents dans la réponse
            if (res.intents && res.intents.length > 0) {
                const intents = res.intents;
                let response = "Désolé, je ne comprends pas.";

                intents.forEach((intent, index) => {
                    if (intent.name === "etude") {
                        response =
                            "Nous avons des exercices sur Java, PHP, Flutter et bien d'autres. Lequel vous intéresse ?";
                    } else if (intent.name === "salutation") {
                        response =
                            "Bonjour! Comment puis-je vous aider aujourd'hui ?";
                    } else if (intent.name === "aide") {
                        response = "Bien sûr ! Quelle est votre question ?";
                    } else if (intent.name === "emotion") {
                        response =
                            "Je comprends que vous traversez un moment difficile.";
                    }
                });

                aiMessage(response, false, botLoadingDelay + botReplyDelay);
            } else {
                aiMessage(
                    "Aucun intent détecté.",
                    false,
                    botLoadingDelay + botReplyDelay
                );
            }
        })
        .catch((error) => {
            aiMessage(errorMessage, false, botLoadingDelay + botReplyDelay);
            console.error("Erreur lors de la récupération des intents:", error);
        });

    aiMessage(loader, true, botLoadingDelay);
};
