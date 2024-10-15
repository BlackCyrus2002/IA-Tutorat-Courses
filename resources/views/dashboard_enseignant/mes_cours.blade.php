<div class="tab-pane" id="courses">
    <div class="ed_dashboard_inner_tab">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation">
                    <a class="active" href="#my" aria-controls="my" role="tab" data-bs-toggle="tab">
                        mes cours mises en ligne
                    </a>
                </li>
                <li role="presentation">
                    <a href="#result" aria-controls="result" role="tab" data-bs-toggle="tab">
                        mes etudiants
                    </a>
                </li>
                <li role="presentation">
                    <a href="#status" aria-controls="status" role="tab" data-bs-toggle="tab">
                        Voir d'autres enseignants
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                @include('dashboard_enseignant.cours.listes_cours')

                @include('dashboard_enseignant.cours.certificat')

                @include('dashboard_enseignant.cours.en_cours')

                @include('dashboard_enseignant.cours.cours_recommande')
            </div>

        </div>
        <!--tab End-->
    </div>
</div>
