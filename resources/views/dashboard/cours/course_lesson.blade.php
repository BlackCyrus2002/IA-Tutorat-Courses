@extends('base')
@section('title', 'Leçon 1: Basic HTML')
@section('content')
    <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="ed_course_single_item">
                        <div class="ed_course_single_image">

                            <div class="ed_video_section">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <div class="ed_video">
                                        <img src="https://dummyimage.com/800x450/000/fff" class="img-responsive"
                                            alt="1" />
                                        <div class="ed_img_overlay">
                                            <a href="javascript:void(0);"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <iframe id="educo_video" class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/8mb-0qbq984" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                        <div class="ed_course_single_info">
                            <h2 class="ed_toppadder20">Leçon 1: Basic HTML</h2>

                            <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus.
                                Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum
                                quis posuere sed, imperdiet quis nisi.
                                Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula
                                pharetra. Uctus ac eros a, faucibus iaculis quam. Nam non iaculis justo. Donec maximus
                                varius velit.Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim,
                                rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu
                                placerat urna. Vestibulum blandit
                                diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim.
                                Aliquam sagittis ipsum ex, sed luctus augue venenatis ut.</p>

                            <p>Fusce at rutrum tellus, ac elementum neque. In nec velit orci. Etiam purus felis,
                                pellentesque sit amet tincidunt at, iaculis quis erat. Morbi imperdiet sodales sapien nec
                                rhoncus. Donec placerat mi et libero iaculis, id
                                maximus est vestibulum. Etiam augue augue, auctor at ornare eget, porta ac nisl. Aliquam et
                                mattis dolor, et aliquet ligula.</p>

                            <p>Suspendisse euismod sapien facilisis tellus aliquam pellentesque.Donec elementum quam est, a
                                condimentum diam tempor ac. Sed quis magna lobortis, pulvinar est at, commodo mauris.Sed
                                ultricies posuere magna elementum laoreet.
                                Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Nunc in mollis
                                erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae
                                est ut sem luctus tristique.</p>

                            <button type="button" class="btn ed_btn pull-left ed_orange">Revenir en arrière</button>
                            <button type="button" class="btn ed_btn pull-right ed_orange">Leçon suivante</button>

                        </div>
                    </div>
                    <div class="ed_time_executor ed_toppadder40">
                        <ul>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Temps estimé pour la leçon</a>
                                <span>estimated time</span>
                            </li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">development overview</a> <span><i
                                        class="fa fa-check-circle-o"></i></span></li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">basic html</a> <span>Currently
                                    active</span></li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Basic CSS</a> <span>Locked</span></li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Advanced HTML + CSS</a> <span>Locked</span>
                            </li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Javascript Beginners</a>
                                <span>Locked</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Sidebar Start-->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="sidebar_wrapper_upper">
                        <div class="sidebar_wrapper">

                            <aside class="widget widget_progress_bar">
                                <h4 class="widget-title">lessons status</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                        <span class="sr-only">75% Complete</span>
                                        <p>75% Completed</p>
                                    </div>
                                </div>
                            </aside>

                            <aside class="widget widget_sharing">
                                <h4 class="widget-title">share this lesson</h4>
                                <ul>
                                    <li><a href="course_single.html"><i class="fa fa-facebook"></i> facebook</a></li>
                                    <li><a href="course_single.html"><i class="fa fa-linkedin"></i> linkedin</a></li>
                                    <li><a href="course_single.html"><i class="fa fa-twitter"></i> twitter</a></li>
                                    <li><a href="course_single.html"><i class="fa fa-google-plus"></i> google+</a></li>
                                </ul>
                            </aside>

                        </div>
                    </div>
                </div>
                <!--Sidebar End-->

            </div>
        </div>

    </div>

    <!--Single content end-->
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
                                            <input class="form-control" type="text" placeholder="Newsletter Email" />
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

@endsection
