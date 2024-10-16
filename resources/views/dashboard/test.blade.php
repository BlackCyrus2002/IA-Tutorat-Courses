@extends('base')
@section('title', 'Passer mon teste')
@section('content')
    <div class="container">
        <div class="container quiz-container">
            <br>
            <h2 class="text-center">Quiz Développement Web (Algorithmique, HTML, JavaScript, CSS)</h2>
            <form id="quiz-form">

                <!-- 5 Questions Algorithmique -->
                <h4>Algorithmique</h4>
                <div class="mb-4">
                    <label class="form-label">1. Quel est l'algorithme de tri le plus rapide dans la plupart des cas
                        ?</label>
                    <div>
                        <input type="radio" name="algo1" value="A"> Tri à bulles<br>
                        <input type="radio" name="algo1" value="B"> Tri par insertion<br>
                        <input type="radio" name="algo1" value="C"> Tri rapide (Quick Sort)
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">2. Quel est l'ordre de complexité du tri fusion (Merge Sort) ?</label>
                    <div>
                        <input type="radio" name="algo2" value="A"> O(n²)<br>
                        <input type="radio" name="algo2" value="B"> O(n log n)<br>
                        <input type="radio" name="algo2" value="C"> O(log n)
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">3. Quel est l'algorithme de recherche utilisé dans une liste triée ?</label>
                    <div>
                        <input type="radio" name="algo3" value="A"> Recherche linéaire<br>
                        <input type="radio" name="algo3" value="B"> Recherche dichotomique<br>
                        <input type="radio" name="algo3" value="C"> Recherche par interpolation
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">4. Que signifie un algorithme "greedy" ?</label>
                    <div>
                        <input type="radio" name="algo4" value="A"> Un algorithme qui maximise une valeur à chaque
                        étape<br>
                        <input type="radio" name="algo4" value="B"> Un algorithme qui choisit l'option la plus
                        lente<br>
                        <input type="radio" name="algo4" value="C"> Un algorithme qui trie les données avant
                        d'effectuer une action
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">5. Quelle est la complexité temporelle de la recherche binaire ?</label>
                    <div>
                        <input type="radio" name="algo5" value="A"> O(n)<br>
                        <input type="radio" name="algo5" value="B"> O(log n)<br>
                        <input type="radio" name="algo5" value="C"> O(n log n)
                    </div>
                </div>

                <!-- 5 Questions HTML -->
                <h4>HTML</h4>
                <div class="mb-4">
                    <label class="form-label">6. Quelle balise HTML est utilisée pour définir un lien hypertexte ?</label>
                    <div>
                        <input type="radio" name="html1" value="A"> &lt;link&gt;<br>
                        <input type="radio" name="html1" value="B"> &lt;a&gt;<br>
                        <input type="radio" name="html1" value="C"> &lt;href&gt;
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">7. Quelle est la balise HTML correcte pour insérer une image ?</label>
                    <div>
                        <input type="radio" name="html2" value="A"> &lt;image&gt;<br>
                        <input type="radio" name="html2" value="B"> &lt;img&gt;<br>
                        <input type="radio" name="html2" value="C"> &lt;src&gt;
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">8. Comment définir une liste ordonnée en HTML ?</label>
                    <div>
                        <input type="radio" name="html3" value="A"> &lt;ul&gt;<br>
                        <input type="radio" name="html3" value="B"> &lt;ol&gt;<br>
                        <input type="radio" name="html3" value="C"> &lt;list&gt;
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">9. Quelle balise HTML est utilisée pour définir un paragraphe ?</label>
                    <div>
                        <input type="radio" name="html4" value="A"> &lt;p&gt;<br>
                        <input type="radio" name="html4" value="B"> &lt;text&gt;<br>
                        <input type="radio" name="html4" value="C"> &lt;div&gt;
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">10. Quelle est la balise pour ajouter un titre de niveau 1 ?</label>
                    <div>
                        <input type="radio" name="html5" value="A"> &lt;heading&gt;<br>
                        <input type="radio" name="html5" value="B"> &lt;h1&gt;<br>
                        <input type="radio" name="html5" value="C"> &lt;title&gt;
                    </div>
                </div>

                <!-- 5 Questions JavaScript -->
                <h4>JavaScript</h4>
                <div class="mb-4">
                    <label class="form-label">11. Comment afficher un message d'alerte en JavaScript ?</label>
                    <div>
                        <input type="radio" name="js1" value="A"> alert("Message")<br>
                        <input type="radio" name="js1" value="B"> prompt("Message")<br>
                        <input type="radio" name="js1" value="C"> message("Message")
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">12. Comment déclarer une variable en JavaScript ?</label>
                    <div>
                        <input type="radio" name="js2" value="A"> var myVar<br>
                        <input type="radio" name="js2" value="B"> declare myVar<br>
                        <input type="radio" name="js2" value="C"> def myVar
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">13. Quelle est la méthode utilisée pour ajouter un élément à la fin d'un
                        tableau ?</label>
                    <div>
                        <input type="radio" name="js3" value="A"> push()<br>
                        <input type="radio" name="js3" value="B"> pop()<br>
                        <input type="radio" name="js3" value="C"> append()
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">14. Comment écrire une fonction en JavaScript ?</label>
                    <div>
                        <input type="radio" name="js4" value="A"> function:myFunction()<br>
                        <input type="radio" name="js4" value="B"> function myFunction()<br>
                        <input type="radio" name="js4" value="C"> def myFunction()
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">15. Comment vérifier si deux valeurs sont égales en JavaScript (en prenant en
                        compte le type) ?</label>
                    <div>
                        <input type="radio" name="js5" value="A"> ==<br>
                        <input type="radio" name="js5" value="B"> !=<br>
                        <input type="radio" name="js5" value="C"> ===
                    </div>
                </div>

                <!-- 5 Questions CSS -->
                <h4>CSS</h4>
                <div class="mb-4">
                    <label class="form-label">16. Quelle propriété CSS est utilisée pour changer la couleur du texte
                        ?</label>
                    <div>
                        <input type="radio" name="css1" value="A"> background-color<br>
                        <input type="radio" name="css1" value="B"> color<br>
                        <input type="radio" name="css1" value="C"> font-color
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">17. Comment appliquer un style de police en italique en CSS ?</label>
                    <div>
                        <input type="radio" name="css2" value="A"> font-weight: italic;<br>
                        <input type="radio" name="css2" value="B"> font-style: italic;<br>
                        <input type="radio" name="css2" value="C"> text-style: italic;
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">18. Quelle propriété CSS contrôle la taille du texte ?</label>
                    <div>
                        <input type="radio" name="css3" value="A"> font-size<br>
                        <input type="radio" name="css3" value="B"> text-size<br>
                        <input type="radio" name="css3" value="C"> size
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">19. Quelle propriété CSS est utilisée pour changer l’arrière-plan d’un
                        élément ?</label>
                    <div>
                        <input type="radio" name="css4" value="A"> color<br>
                        <input type="radio" name="css4" value="B"> background-image<br>
                        <input type="radio" name="css4" value="C"> background-color
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">20. Comment centrer un élément avec CSS en utilisant flexbox ?</label>
                    <div>
                        <input type="radio" name="css5" value="A"> align-items: center;<br>
                        <input type="radio" name="css5" value="B"> justify-content: center;<br>
                        <input type="radio" name="css5" value="C"> display: center;
                    </div>
                </div>

                <button type="button" class="btn btn-primary" onclick="checkAnswers()">Soumettre</button>
            </form>

            <div class="result mt-4">
                <h3 class="text-center">Résultat : <span id="score"></span>/20</h3>
            </div>
        </div>

    </div>

@endsection
