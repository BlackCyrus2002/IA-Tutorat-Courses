@extends('base')
@section('title', 'Tableau de bord')
@section('content')
    <div class="ed_pagetitle">
        <div class="ed_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>EDUC-AI profil</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Accueil</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="{{ route('index') }}">EDUC-AI profil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <!--single student detail start-->
    <div class="ed_dashboard_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="ed_sidebar_wrapper">
                        <div class="ed_profile_img">
                            <img src="https://dummyimage.com/263x263/000/fff" alt="Dashboard Image" />
                        </div>
                        <h3>andre house</h3>
                        <div class="ed_tabs_left">
                            <ul class="nav nav-tabs">
                                <li><a class="active" href="#dashboard" data-bs-toggle="tab">Tableau de bord</a></li>
                                <li><a href="#courses" data-bs-toggle="tab">Cours <span>4</span></a></li>
                                <li><a href="#activity" data-bs-toggle="tab">Activités</a></li>
                                <li><a href="#notification" data-bs-toggle="tab">Notifications <span>0</span></a></li>
                                <li><a href="#profile" data-bs-toggle="tab">Profil</a></li>
                                <li><a href="#setting" data-bs-toggle="tab">Paramètres</a></li>
                                <li><a href="#forums" data-bs-toggle="tab">Forums</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="ed_dashboard_tab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="dashboard">
                                <div class="ed_dashboard_tab_info">
                                    <h1>
                                        @if (date('H:i') > date('12:00'))
                                            Bonsoir,
                                        @else
                                            Bonjour,
                                        @endif
                                        chers <span>apprenant</span>
                                    </h1>
                                    <h1>Bienvenue sur votre Tableau de bord</h1>
                                    <p style="text-align: left">Salut <strong>Koffi Martin</strong>, ici, vous devez voir et
                                        mettre à jour votre
                                        profil,
                                        les cours auxquels vous êtes abonné, les activités, les notifications et d'autres
                                        choses. Toutes les mises à jour ci-dessus
                                        peuvent être modifiées à partir du panneau de gauche fourni.</p>
                                </div>
                            </div>
                            @include('dashboard.mes_cours')

                            @include('dashboard.activite')

                            @include('dashboard.notifications')

                            @include('dashboard.profil')

                            @include('dashboard.parametres')

                            @include('dashboard.forums_tuteur')

                            @include('dashboard.geniusAI')
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
