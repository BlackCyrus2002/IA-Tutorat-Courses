<div class="tab-pane" id="courses">
    <div class="ed_dashboard_inner_tab">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation">
                    <a class="active" href="#my" aria-controls="my" role="tab" data-bs-toggle="tab">
                        mes cours
                    </a>
                </li>
                <li role="presentation">
                    <a href="#result" aria-controls="result" role="tab" data-bs-toggle="tab">
                        mes certifications
                    </a>
                </li>
                <li role="presentation">
                    <a href="#status" aria-controls="status" role="tab" data-bs-toggle="tab">
                        Non terminés
                    </a>
                </li>
                <li role="presentation">
                    <a href="#instructing" aria-controls="instructing" role="tab" data-bs-toggle="tab">
                        Cours recommandés
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                @include('dashboard.cours.listes_cours')

                @include('dashboard.cours.certificat')

                @include('dashboard.cours.en_cours')

                @include('dashboard.cours.cours_recommande')
            </div>

        </div>
        <!--tab End-->
    </div>
</div>
