<!DOCTYPE html>
<!--
Template Name: Educo
Version: 3.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Educo" />
    <meta name="keywords" content="Educo, html template, Education template" />
    <meta name="author" content="Kamleshyadav" />
    <meta name="MobileOptimized" content="320" />

    <!--srart theme style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/one-course-style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}" />
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/header/favicon.png') }}" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
        <header class="position-relative" id="ed_header_wrapper">
            <div class="ed_header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Bienvenue sur EDUC-AI</p>
                                <a href="{{ route('login') }}" class="btn btn-light">Se connecter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ed_header_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="educo_logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('images/header/logo.png') }}"
                                alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-2 col-md-1 col-sm-12 col-12">
                            <div class="main-menu-container">
                                <div class="main-menu">
                                    <ul id="desktop-nav">
                                        <li class="active"><a href="{{ route('index') }}#home">Accueil</a></li>
                                        <li><a href="{{ route('index') }}#about">Nos formations</a></li>
                                        <li><a href="{{ route('index') }}#features">features</a></li>
                                        <li><a href="{{ route('index') }}#contact">Nous contacter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-7 col-md-8 col-sm-12 col-12">
                            <div class="educo_call edu-info-menu">
                                <a href="javascript:void(0);"><i class="fa fa-phone"></i> 1-220-090</a>
                                <div class="menu-btn-wrap">
                                    <a href="javascript:void(0);" class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!--header end -->

        @yield('content')

        <!--Footer Top section start-->
        <div class="ed_footer_wrapper">
            <div class="ed_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <p>
                                    <a href="index.html"><img src="{{ asset('images/footer/F_Logo.png') }}"
                                            alt="Footer Logo" /></a>
                                </p>
                                <p>Nous sommes à la recherche de personnes passionnées par l’innovation et l'éducation.
                                    Si vous souhaitez rejoindre une équipe dynamique, engagée à transformer l’éducation
                                    grâce à la technologie, Educ-AI est l’endroit parfait pour concrétiser vos ambitions
                                    professionnelles. <br>
                                    N'hésitez à nous rejoindre !
                                </p>
                                <div class="ed_sociallink">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Google+">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Linkedin">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Whatsapp">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">Retrouvez-nous</h4>
                                <p><i class="fa fa-safari"></i>Wimbledon Street 42a, 45290 Wimbledon, <br />United
                                    Kingdom</p>
                                <p><i class="fa fa-envelope-o"></i><a
                                        href="javascript:void(0);">info@edutioncollege.gov.co.uk</a> <a
                                        href="javascript:void(0);">public@edutioncollege.gov.co.uk</a></p>
                                <p><i class="fa fa-phone"></i> 1-220-090-080</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">Vous pouvez aussi voir</h4>
                                <p><strong>@education </strong> Combien d'étudiants formez-vous chaque mois ? Ouvert<a
                                        href="javascript:void(0);"> http://t.co/KFDdzLSD9</a><br />il y a 2 jours</p>

                                <p><strong>@educationUK </strong> Une conception Web qui fonctionne. Jetez un œil à ce
                                    chef-d'œuvre. <a href="javascript:void(0);">http://t.co/9j8DH93zrO</a><br />il y a
                                    5 jours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Top section end-->
        <!--Footer Bottom section start-->
        <div class="ed_footer_bottom">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="ed_copy_right">
                                <p>&copy; Copyright 2024, Tous droits reservés, <a
                                        href="javascript:void(0);">EDUC-AI</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="ed_footer_menu">
                                <ul>
                                    <li><a href="{{ route('index') }}">Accueil</a></li>
                                    <li><a href="{{ route('braine.private_policy') }}">Politique de
                                            confidentialité</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom section end-->
    </div>
    <!--Page main section end-->
    <!--Main js file start-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/plugins/revel/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/plugins/countto/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/plugins/countto/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/one-course-custom.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
