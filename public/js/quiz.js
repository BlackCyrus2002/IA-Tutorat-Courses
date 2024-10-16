const correctAnswers = {
    algo1: "C",
    algo2: "B",
    algo3: "B",
    algo4: "A",
    algo5: "B",
    html1: "B",
    html2: "B",
    html3: "B",
    html4: "A",
    html5: "B",
    js1: "A",
    js2: "A",
    js3: "A",
    js4: "B",
    js5: "C",
    css1: "B",
    css2: "B",
    css3: "A",
    css4: "C",
    css5: "B",
};

function checkAnswers() {
    let score = 0;
    const form = document.getElementById("quiz-form");

    Object.keys(correctAnswers).forEach((question) => {
        const userAnswer = form[question].value;
        if (userAnswer === correctAnswers[question]) {
            score++;
        }
    });

    document.getElementById("score").textContent = score;
    document.querySelector(".result").style.display = "block";
}
