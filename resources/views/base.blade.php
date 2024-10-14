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
    <link href="{{ asset('css/one-course-style.css') }}" rel="stylesheet" type="text/css" />
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/header/favicon.png') }}" />
</head>

<body>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
        <header id="ed_header_wrapper">
            <div class="ed_header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>Welcome To Our New Session Of Education</p>
                            <div class="ed_info_wrapper">
                                <a href="javascript:void(0);" id="login_button">Login</a>
                                <div id="login_one" class="ed_login_form">
                                    <h3>log in</h3>
                                    <form class="form">
                                        <div class="form-group">
                                            <label class="control-label">Email :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Password :</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">login</button>
                                            <a href="{{ route('braine.register') }}">Registration</a>
                                        </div>
                                    </form>
                                </div>
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
                                        <li class="active"><a href="{{ route('index') }}#home">home</a></li>
                                        <li><a href="{{ route('index') }}#about">about us</a></li>
                                        <li><a href="{{ route('index') }}#features">features</a></li>
                                        <li><a href="{{ route('index') }}#contact">Contact</a></li>
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

        <!--Section fourteen Contact form start-->
        <div class="ed_transprentbg ed_toppadder80 ed_bottompadder80" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ed_bottompadder70">
                        <div class="ed_heading_top">
                            <h3>Find us here</h3>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ed_event_single_address_map ed_bottompadder50">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.30120302504!2d54.947561088342766!3d25.076381466775672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1633159256205!5m2!1sen!2sin"
                                    width="100%" height="340" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ed_heading_top">
                            <h3>Send us a message</h3>
                        </div>
                    </div>
                    <div class="ed_contact_form ed_toppadder60 row m-0">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" id="uname" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" id="umail" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" id="sub" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <textarea id="msg" class="form-control" rows="6" placeholder="Message"></textarea>
                            </div>
                            <button id="ed_submit" class="btn ed_btn ed_orange pull-right">send</button>
                            <p id="err"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Section fourteen Contact form start-->
        <!--Newsletter Section six start-->
        <div class="ed_newsletter_section">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="ed_newsletter_section_heading">
                                    <h4>Let us inform you about everything important directly.</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="row">
                                    <div class="ed_newsletter_section_form">
                                        <form class="form row m-0">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                                <input class="form-control" type="text"
                                                    placeholder="Newsletter Email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                <button class="btn ed_btn ed_green">confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Newsletter Section six end-->
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
                                <p>Edution is an outstanding PSD template targeting educational institutions, helping
                                    them establish strong identity on the internet without any real developing
                                    knowledge.
                                </p>
                                <div class="ed_sociallink">
                                    <ul>
                                        <li><a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Google+"><i class="fa fa-google-plus"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Twitter"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-placement="bottom" title="Whatsapp"><i class="fa fa-whatsapp"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">find us</h4>
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
                                <h4 class="widget-title">social media</h4>
                                <p><strong>@education </strong> How many students do you educate monthly? Open <a
                                        href="javascript:void(0);"> http://t.co/KFDdzLSD9</a><br />2 days ago</p>

                                <p><strong>@educationUK </strong> Web Design that works. Have a look at this
                                    masterpiece. <a href="javascript:void(0);">http://t.co/9j8DH93zrO</a><br />5 days
                                    ago</p>
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
                                <p>&copy; Copyright 2021, All Rights Reserved, <a href="javascript:void(0);">EDUCO</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="ed_footer_menu">
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="private_policy.html">private policy</a></li>
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

</body>

</html>
