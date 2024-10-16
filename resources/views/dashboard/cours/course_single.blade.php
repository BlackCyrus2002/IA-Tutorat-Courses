@extends('base')
@section('title', 'Project Learning')
@section('content')
    <div class="ed_pagetitle">
        <div class="ed_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Project Learning</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Acc</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="course_single.html">Single course</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <!--Single content start-->
    <div class="ed_graysection ed_course_single ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="ed_course_single_item">
                        <div class="ed_course_single_image">
                            <img src="{{ asset('images/DIGITALAGELEARNING.jpg') }}" alt="event image" />
                        </div>
                        <div class="ed_course_single_info">
                            <h2>Project Learning <span>25 000F</span></h2>
                            <div class="ed_rating">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="ed_stardiv">
                                                    <div class="star-rating"><span style="width:80%;"></span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 pull-right text-right">
                                        <div class="ed_views">
                                            <i class="fa fa-users"></i>
                                            <span>35 Apprenants</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="ed_course_single_tab">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a class="active" href="#description"
                                            aria-controls="description" role="tab" data-bs-toggle="tab">description</a>
                                    </li>
                                    <li role="presentation"><a href="#students" aria-controls="students" role="tab"
                                            data-bs-toggle="tab">Nombres d'étudiants pour ce cours</a></li>
                                    <li role="presentation"><a href="#news" aria-controls="news" role="tab"
                                            data-bs-toggle="tab">Nouveaux cours</a></li>
                                    <li role="presentation"><a href="#events" aria-controls="events" role="tab"
                                            data-bs-toggle="tab">Evènement</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <div class="ed_course_tabconetent">
                                            <h2>A savoir</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                                vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus
                                                volutpat condimentum ac, placerat semper ligula. Suspendisse in
                                                viverra justo,
                                                eu placerat urna. Vestibulum blandit diam suscipit nibh mattis
                                                ullamcorper. Nullam a condimentum nulla, ut facilisis enim. Aliquam
                                                sagittis ipsum ex, sed luctus augue venenatis ut. Fusce at rutrum
                                                tellus,
                                                ac elementum neque. In nec velit orci. Etiam purus felis,
                                                pellentesque sit amet tincidunt at, iaculis quis erat. Morbi
                                                imperdiet sodales sapien nec rhoncus. Donec placerat mi et libero
                                                iaculis, id maximus
                                                est vestibulum. Etiam augue augue, auctor at ornare eget, porta ac
                                                nisl. Aliquam et mattis dolor, et aliquet ligula.</p>

                                            <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas
                                                scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu
                                                consequat erat tempus et. Nullam ipsum est, interdum quis posuere
                                                sed, imperdiet
                                                quis nisi. pulvinar est at, commodo mauris. Nunc in mollis erat.
                                                Integer aliquet orci non auctor pretium.Proin quis justo est.
                                                Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula
                                                pharetra.
                                                Uctus ac eros a, faucibus iaculis quam. Nam non iaculis justo. Donec
                                                maximus varius velit.</p>

                                            <p>Sed ultricies posuere magna elementum laoreet. Suspendisse elementum
                                                sagittis nisl, id pellentesque purus auctor finibus. Donec elementum
                                                quam est, a condimentum diam tempor ac. Sed quis magna lobortis,
                                                pulvinar est at, commodo mauris. Nunc in mollis erat. Integer
                                                aliquet orci non auctor pretium. Pellentesque eu nisl augue.
                                                Curabitur vitae est ut sem luctus tristique. Suspendisse euismod
                                                sapien facilisis
                                                tellus aliquam pellentesque.</p>

                                            <p>Viverra justo, eu placerat urna. faucibus iaculis quam. Nam non
                                                iaculis justoVestibulum blandit diam suscipit nibh mattis
                                                ullamcorper. Nullam a condimentum nulla, ut facilisis enim. Aliquam
                                                sagittis ipsum
                                                ex, sed luctus augue venenatis ut. Fusce at rutrum tellus, ac
                                                elementum neque. In nec velit orci. Etiam purus felis, pellentesque
                                                sit amet tincidunt at, iaculis quis erat. Morbi imperdiet sodales
                                                sapien
                                                nec rhoncus. Donec placerat mi et libero iaculis, id maximus est</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="students">
                                        <div class="ed_inner_dashboard_info">
                                            <div class="ed_course_single_info">
                                                <h2>Total d'apprenant :- <span>1</span></h2>
                                                <h5>1 élève à recemment rejoind le cour</h5>
                                                <div class="ed_add_students">
                                                    <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                    <span>Assan Cyriac Abonouan</span>
                                                    <p>Nouvel étudiant</p>
                                                </div>
                                                <div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="ed_blog_bottom_pagination ed_toppadder40">
                                                            <nav>
                                                                <ul class="pagination">
                                                                    <li><a href="javascript:void(0);">1</a></li>
                                                                    <li><a href="javascript:void(0);">2</a></li>
                                                                    <li><a href="javascript:void(0);">3</a></li>
                                                                    <li class="active"><a href="javascript:void(0);">Next
                                                                            <span class="sr-only">(current)</span></a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="news">
                                        <div class="ed_course_tabconetent">
                                            <h2>Nouveaux cours</h2>
                                            <h5>quelques nouvelles récentes sur ce cours....</h5>
                                            <p> Aucune nouvelle en particulier </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="events">
                                        <div class="ed_course_single_info">
                                            <h2>total events on this course :-<span>5</span></h2>
                                            <div class="ed_course_single_inner_tab">
                                                <div role="tabpanel">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation"><a class="active" href="#upcoming"
                                                                aria-controls="upcoming" role="tab"
                                                                data-bs-toggle="tab">upcoming</a>
                                                        </li>
                                                        <li role="presentation"><a href="#past" aria-controls="past"
                                                                role="tab" data-bs-toggle="tab">past</a></li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="upcoming">
                                                            <div class="ed_course_event">
                                                                <h5>1. mobile capabilities</h5>
                                                                <p><span>orgnaiger :-</span> James Marco</p>
                                                                <p><span>held on :-</span> October 1 @ 7:30 Am -
                                                                    9:00 Am</p>
                                                                <p>It is pleasure, expound the actual teachings of
                                                                    the great explorer of the truthI will give you a
                                                                    complete account of the system, and No one
                                                                    rejects, dislikes, or avoids pleasure itself,
                                                                    because.
                                                                </p>
                                                            </div>
                                                            <div class="ed_course_event">
                                                                <h5>2. Management Prog.</h5>
                                                                <p><span>orgnaiger :-</span> Fumes Sarcoma</p>
                                                                <p><span>held on :-</span>October 3 @ 10:30 Am -
                                                                    2:00 Pm</p>
                                                                <p>I will give you a complete account of the system,
                                                                    and No one rejects, dislikes, or avoids pleasure
                                                                    itself, because it is pleasure, expound the
                                                                    actual teachings of the great explorer of
                                                                    the truth.</p>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="past">
                                                            <div class="ed_course_event">
                                                                <h5>1. JavaScript Campus.</h5>
                                                                <p><span>orgnaiger :-</span> Tina Fibonacci</p>
                                                                <p><span>held on :-</span>September 20 @ 7:30 Pm -
                                                                    12:00 Am</p>
                                                                <p>avoids pleasure itself, because it is pleasure,
                                                                    expound the actual teachings of the great
                                                                    explorer of the truth will give you a complete
                                                                    account of the system, and No one rejects,
                                                                    dislikes.</p>
                                                            </div>
                                                            <div class="ed_course_event">
                                                                <h5>2. Coding Seminar</h5>
                                                                <p><span>orgnaiger :-</span> James Marco</p>
                                                                <p><span>held on :-</span> September 10 @ 7:30 Am -
                                                                    9:00 Am</p>
                                                                <p>great explorer of the complete account of the
                                                                    system, and No one rejects, dislikes, or avoids
                                                                    pleasure itself, because it is pleasure, expound
                                                                    the actual teachings of the truth.</p>
                                                            </div>
                                                            <div class="ed_course_event">
                                                                <h5>3. Project Learning</h5>
                                                                <p><span>orgnaiger :-</span> Shy Tommy</p>
                                                                <p><span>held on :-</span>September 30 @ 10:30 Am -
                                                                    2:00 Pm</p>
                                                                <p>one rejects, dislikes, or avoids pleasure itself,
                                                                    because it is pleasure, of the system, and No
                                                                    expound the actual teachings of the great
                                                                    explorer of the truth.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--tab End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab End-->
                    </div>
                    <div class="ed_time_executor ed_toppadder40">
                        <ul>
                            <li><a href="{{ route('dashboard.course_lesson') }}">lessons</a> <span>estimated time</span>
                            </li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">development overview</a> <span>1Hourse 10
                                    Minuts</span></li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">basic html</a> <span>2Hourse 30
                                    Minuts</span></li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Basic CSS</a> <span>3Hourse 15
                                    Minuts</span></li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Advanced HTML + CSS</a> <span>1Hourse 30
                                    Minuts</span>
                            </li>
                            <li><a href="{{ route('dashboard.course_lesson') }}">Javascript</a> <span>2Hourse 45
                                    Minuts</span></li>
                        </ul>
                    </div>
                </div>
                <!--Sidebar Start-->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="sidebar_wrapper_upper">
                        <div class="sidebar_wrapper">
                            <aside class="widget widget_button">
                                <a href="purchase_course.html" class="ed_btn ed_green">Join this course</a>
                            </aside>

                            <aside class="widget widget_sharing">
                                <h4 class="widget-title">share this course</h4>
                                <ul>
                                    <li><a href="course_single.html"><i class="fa fa-facebook"></i> facebook</a>
                                    </li>
                                    <li><a href="course_single.html"><i class="fa fa-linkedin"></i> linkedin</a>
                                    </li>
                                    <li><a href="course_single.html"><i class="fa fa-twitter"></i> twitter</a>
                                    </li>
                                    <li><a href="course_single.html"><i class="fa fa-google-plus"></i> google+</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <!--Sidebar End-->
            </div>
        </div>
    </div>
@endsection
