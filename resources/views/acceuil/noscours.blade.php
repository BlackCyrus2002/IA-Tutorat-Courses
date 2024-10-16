<!--Our expertise section one start -->
<section class="services-one" id="slider2">
    <div class="container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Nos Service</div>
            <h2 class="sec-title_heading">Nos formations <br>
                <span style="font-size: 20px">
                    Grâce à un algorithme basé sur l'IA, nous vous offons un
                    moyen plus simple de trouver des formations qui pourraient vous interessez
                </span>
            </h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block One -->
            <div class="ed_mostrecomeded_course_slider">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ed_bottompadder20">
                        <div class="ed_item_img">
                            <img src="{{ asset('images/DIGITALAGELEARNING.jpg') }}" style="height: 263px;width:263px"
                                alt="item1" class="img-responsive">
                        </div>
                        <div class="ed_item_description ed_most_recomended_data">
                            <h4><a href="{{ route('dashboard.cour_suivie') }}">Project Learning
                                </a><span>25 000FCFA</span></h4>
                            <div class="row">
                                <div class="ed_rating">
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="ed_stardiv">
                                                    <div class="star-rating"><span style="width:80%;"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                        <div class="ed_views">
                                            <i class="fa fa-users"></i>
                                            <span>35 élèves</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>L'apprentissage par projet est un outil flexible pour encadrer
                                des normes académiques données dans un programme d'études.</p>
                            <a href="{{ route('dashboard.cour_suivie') }}" class="ed_getinvolved">
                                Plus d'information <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
