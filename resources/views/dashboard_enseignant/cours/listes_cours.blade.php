<div role="tabpanel" class="tab-pane active" id="my">
    <div class="ed_inner_dashboard_info">
        <h2>vous avez 4 cours souscrits</h2>
        <div class="ed_mostrecomeded_course_slider">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 ed_bottompadder20">
                    <div class="ed_item_img">
                        <img src="{{ asset('images/DIGITALAGELEARNING.jpg') }}" style="height: 263px;width:263px"
                            alt="item1" class="img-responsive">
                    </div>
                    <div class="ed_item_description ed_most_recomended_data">
                        <h4><a href="">Project Learning
                            </a><span>£25</span></h4>
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
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="row">
                                                <p>(5 review)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                    <div class="ed_views">
                                        <i class="fa fa-users"></i>
                                        <span>35 students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Project-Based Learning is a flexible tool for framing
                            given academic standards into curriculum flexible
                            tool for framing.</p>
                        <a href="{{ route('dashbord_enseignant.edit_cours') }}" class="ed_getinvolved">
                            Modifier le cours
                            <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div>
                <center>
                    <a href="{{ route('dashbord_enseignant.add_cours') }}" class="btn btn-primary">Ajouter un nouveau
                        cour</a>
                </center>
            </div>
        </div>
    </div>
</div>
