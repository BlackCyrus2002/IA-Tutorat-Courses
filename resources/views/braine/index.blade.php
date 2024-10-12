@extends('base')
@section('title', 'Braine Digital Agency Business HTML-5 Template | Homepage 01')
@section('content')
    <!-- Slider One -->
    @include('braine.accueil.slider_one')
    <!-- End Main Slider Section -->

    <!-- Services One -->
    <section class="services-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Our Service</div>
                <h2 class="sec-title_heading">Experience our latest <br> <span>new features</span></h2>
            </div>
            <div class="row clearfix">

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon">
                            <i class="icon-speaker1"></i>
                        </div>
                        <h5 class="service-block_one-heading"><a href="service-detail.html">Digital marketers</a>
                        </h5>
                        <div class="service-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing elit
                            Ut et <span>massa mi. Aliquam</span> in hendrerit urna..</div>
                        <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                            <div class="service-block_one-number">01</div>
                            <a class="service-block_one-join" href="service-detail.html">Join now <i
                                    class="fa-solid fa-plus fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon">
                            <i class="icon-marketing"></i>
                        </div>
                        <h5 class="service-block_one-heading"><a href="service-detail.html">Content marketers</a>
                        </h5>
                        <div class="service-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing elit
                            Ut et <span>massa mi. Aliquam</span> in hendrerit urna..</div>
                        <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                            <div class="service-block_one-number">02</div>
                            <a class="service-block_one-join" href="service-detail.html">Join now <i
                                    class="fa-solid fa-plus fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon">
                            <i class="icon-users"></i>
                        </div>
                        <h5 class="service-block_one-heading"><a href="service-detail.html">Founders</a></h5>
                        <div class="service-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing elit
                            Ut et <span>massa mi. Aliquam</span> in hendrerit urna..</div>
                        <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                            <div class="service-block_one-number">03</div>
                            <a class="service-block_one-join" href="service-detail.html">Join now <i
                                    class="fa-solid fa-plus fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon">
                            <i class="icon-copyright"></i>
                        </div>
                        <h5 class="service-block_one-heading"><a href="service-detail.html">Copywriters</a></h5>
                        <div class="service-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing elit
                            Ut et <span>massa mi. Aliquam</span> in hendrerit urna..</div>
                        <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                            <div class="service-block_one-number">04</div>
                            <a class="service-block_one-join" href="service-detail.html">Join now <i
                                    class="fa-solid fa-plus fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon">
                            <i class="icon-tag"></i>
                        </div>
                        <h5 class="service-block_one-heading"><a href="service-detail.html">SEO specialists</a>
                        </h5>
                        <div class="service-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing elit
                            Ut et <span>massa mi. Aliquam</span> in hendrerit urna..</div>
                        <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                            <div class="service-block_one-number">05</div>
                            <a class="service-block_one-join" href="service-detail.html">Join now <i
                                    class="fa-solid fa-plus fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_two-sideicon"
                            style="background-image:url({{ asset('images/icons/service-1.png') }})"></div>
                        <div class="service-block_two-icon">
                            <img src="{{ asset('images/icons/service.png') }}" alt="" />
                        </div>
                        <h5 class="service-block_two-heading"><a href="service-detail.html">More service</a></h5>
                        <div class="service-block_two-text">Lorem ipsum dolor sit ame consectetur.</div>
                        <div class="service-block_two-button">
                            <a href="service.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">learn more</span>
                                    <span class="text-two">learn more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services One -->

    <!-- About One -->
    <section class="about-one">
        <div class="about-one_pattern" style="background-image:url({{ asset('images/background/about-pattern.png') }})">
        </div>
        <div class="about-one_icon" style="background-image:url({{ asset('images/icons/about-1.png') }})">
        </div>
        <div class="about-one_icon-two" style="background-image:url({{ asset('images/icons/about-2.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Tab Column -->
                <div class="about-one_tab-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_tab-outer">
                        <div class="about-one_tab-shadow"
                            style="background-image:url({{ asset('images/background/tab-shadow.png') }})">
                        </div>
                        <div class="about-one_tab-image">
                            <img src="{{ asset('images/resource/tabs.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Tab Column -->
                <div class="about-one_content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_content-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">About us</div>
                            <h2 class="sec-title_heading">Crafting of your digital <span>narrative discover</span>
                                our journey</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                            hendrerit urna. <span>Pellentesque sit amet</span> sapien fringilla, mattis ligula
                            consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis
                            ligula consectetur.</p>
                        <div class="about-one_options d-flex align-items-center flex-wrap">
                            <a href="about.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know more</span>
                                    <span class="text-two">Know more</span>
                                </span>
                            </a>
                            <div class="about-one_rating-box d-flex align-items-center flex-wrap">
                                4.7
                                <div class="about-one_rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <i>Customer rating</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About One -->

    <!-- Choose One -->
    <section class="choose-one">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <div class="sec-title_title">why chose us</div>
                    <h2 class="sec-title_heading">Reason to chose our <br> <span>platform</span></h2>
                </div>
                <div class="row clearfix">

                    <!-- Counter Block One -->
                    <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="counter-block_one-icon fa-brands fa-instagram fa-fw"></div>
                            <div class="counter-block_one-count"><span class="odometer" data-count="8000"></span><i>+</i>
                            </div>
                            <div class="counter-block_one-text">More than 8,000 customers have experimented with
                                Kafkai</div>
                        </div>
                    </div>

                    <!-- Counter Block One -->
                    <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
                            data-wow-duration="1500ms">
                            <div class="counter-block_one-icon fa-brands fa-instagram fa-fw"></div>
                            <div class="counter-block_one-count"><span class="odometer"
                                    data-count="500000"></span><i>+</i></div>
                            <div class="counter-block_one-text">More than 8,000 customers have experimented with
                                Kafkai</div>
                        </div>
                    </div>

                    <!-- Counter Block One -->
                    <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="counter-block_one-icon fa-brands fa-instagram fa-fw"></div>
                            <div class="counter-block_one-count"><span class="odometer"
                                    data-count="200000"></span><i>+</i></div>
                            <div class="counter-block_one-text">More than 8,000 customers have experimented with
                                Kafkai</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Choose One -->

    <!-- Answer One -->
    <section class="answer-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Tab Column -->
                <div class="answer-one_title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="answer-one_title-outer">
                        <!-- Sec Title -->
                        <div class="sec-title title-anim">
                            <div class="sec-title_title">AI ANSWERS</div>
                            <h2 class="sec-title_heading">Gain <span>full control</span> of your information docs
                                and many more</h2>
                        </div>
                        <ul class="answer-one_list">
                            <li><i class="fa-solid fa-check fa-fw"></i>Create a personalized knowledge base on your
                                own Braine library</li>
                            <li><i class="fa-solid fa-check fa-fw"></i>Use your trusted sources to find the answers
                                you need</li>
                            <li><i class="fa-solid fa-check fa-fw"></i>Stay in the know with AI Q&A and semantic
                                search</li>
                        </ul>
                        <div class="answer-one_button">
                            <a href="about.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know more</span>
                                    <span class="text-two">Know more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tab Column -->
                <div class="answer-one_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="answer-one_content-outer">
                        <div class="answer-one_pattern"
                            style="background-image:url({{ asset('images/background/faq-shadow.png') }})">
                        </div>
                        <div class="answer-one_image">
                            <img src="{{ asset('images/resource/faq.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Answer One -->

    <!-- Testimonial One -->
    <section class="testimonial-one">
        <div class="auto-container">
            <div class="inner-container"
                style="background-image:url({{ asset('images/background/testimonial-one_bg.png') }})">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="sec-title_title">Testimonials</div>
                    <h2 class="sec-title_heading">What our respectable <br> <span>clients says</span></h2>
                </div>
                <div class="three-item_carousel swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="testimonial-block_one-text">Lorem ipsum amet consectetur adipiscing
                                        elit Ut et massa mi. Aliquam in hendrerit <span>Pellentesque sit amet</span>
                                        sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                                        mattis tellus. Nullam quis imperdiet augue.</div>
                                    <div class="testimonial-block_one-author_box">
                                        <div class="testimonial-block_one-author-image">
                                            <img src="{{ asset('images/resource/author-2.png') }}" alt="" />
                                        </div>
                                        Larry K. Lund <span>Social Media Manger</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="testimonial-block_one-text">Lorem ipsum amet consectetur adipiscing
                                        elit Ut et massa mi. Aliquam in hendrerit <span>Pellentesque sit amet</span>
                                        sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                                        mattis tellus. Nullam quis imperdiet augue.</div>
                                    <div class="testimonial-block_one-author_box">
                                        <div class="testimonial-block_one-author-image">
                                            <img src="{{ asset('images/resource/author-3.png') }}" alt="" />
                                        </div>
                                        Marian R. Vieira <span>Social Media Manger</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="testimonial-block_one-text">Lorem ipsum amet consectetur adipiscing
                                        elit Ut et massa mi. Aliquam in hendrerit <span>Pellentesque sit amet</span>
                                        sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                                        mattis tellus. Nullam quis imperdiet augue.</div>
                                    <div class="testimonial-block_one-author_box">
                                        <div class="testimonial-block_one-author-image">
                                            <img src="{{ asset('images/resource/author-4.png') }}" alt="" />
                                        </div>
                                        Bob E. Wiggins <span>Social Media Manger</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- If we need pagination -->
                    <div class="three-item_carousel-pagination"></div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial One -->

    <!-- Steps One -->
    <section class="steps-one">
        <div class="steps-one_bg" style="background-image:url({{ asset('images/background/step-1_bg.png') }})"></div>
        <div class="steps-one_icon" style="background-image:url({{ asset('images/icons/step.png') }})"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="circle-layer"></div>
                <div class="dots-layer">
                    <span class="dot-one"></span>
                    <span class="dot-two"></span>
                </div>

                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="sec-title_title">How its work</div>
                    <h2 class="sec-title_heading">Braine <span>typically operate</span> in <br> a three steps</h2>
                </div>
                <div class="steps-one_button">
                    <a href="about.html" class="template-btn btn-style-two">
                        <span class="btn-wrap">
                            <span class="text-one">Know more</span>
                            <span class="text-two">Know more</span>
                        </span>
                    </a>
                </div>
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Step Block One -->
                        <div class="step-block_one">
                            <div class="step-block_one-inner">
                                <div class="step-block_one-steps">step 01</div>
                                <h5 class="step-block_one-title">Algorithm processing</h5>
                                <div class="step-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing
                                    elit Ut et massa mi. Aliquam in hendrerit urna..</div>
                                <div class="step-block_one-content">
                                    <div class="image">
                                        <img src="{{ asset('images/resource/step-1.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- Step Block One -->
                        <div class="step-block_one">
                            <div class="step-block_one-inner">
                                <div class="step-block_one-steps">step 02</div>
                                <h5 class="step-block_one-title">Input & data gathering</h5>
                                <div class="step-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing
                                    elit Ut et massa mi. Aliquam in hendrerit urna..</div>
                                <div class="step-block_one-content">
                                    <div class="image">
                                        <img src="{{ asset('images/resource/step-2.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step Block One -->
                        <div class="step-block_one">
                            <div class="step-block_one-inner">
                                <div class="step-block_one-steps">step 03</div>
                                <h5 class="step-block_one-title">Content generation & refinement</h5>
                                <div class="step-block_one-text">Lorem ipsum dolor sit ame consectetur adipiscing
                                    elit Ut et massa mi. Aliquam in hendrerit urna..</div>
                                <div class="step-block_one-content">
                                    <div class="image">
                                        <img src="{{ asset('images/resource/step-3.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Steps One -->

    <!-- Price One -->
    <section class="price-one">
        <div class="price-one_bg" style="background-image:url({{ asset('images/background/price-bg.png') }})"></div>
        <div class="auto-container">
            <div class="inner-container">
                <!-- Sec Title -->
                <div class="sec-title title-anim centered">
                    <div class="sec-title_title">Our Peicing</div>
                    <h2 class="sec-title_heading">Join for <span>free</span> Today</h2>
                </div>
                <div class="pricing-tabs tabs-box">

                    <!--Tab Btns-->
                    <div class="buttons-outer">
                        <ul class="tab-buttons clearfix">
                            <li data-tab="#prod-monthly" class="tab-btn active-btn">Monthly</li>
                            <li data-tab="#prod-yearly" class="tab-btn">Yearly</li>
                        </ul>
                    </div>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab -->
                        <div class="tab active-tab" id="prod-monthly">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Price Block One -->
                                    <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                        <div class="price-block_one-inner">
                                            <div class="price-block_one-title">Starter</div>
                                            <div class="price-block_one-subtitle">Up to 2,000 words / mo</div>
                                            <div class="price-block_one-content">
                                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                    <div class="price-block_one-price"><sup>$</sup>3<sub>/mo</sub>
                                                    </div>
                                                    <div class="price-block_one-text">*Get Braine tailored</div>
                                                </div>
                                                <div class="price-block_one-button">
                                                    <a class="template-btn price-one_button" href="#">Start
                                                        1 month free trail</a>
                                                </div>
                                                <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to basic
                                                        tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to AI
                                                        copywriting tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Email support only
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block One -->
                                    <div class="price-block_one active col-lg-4 col-md-6 col-sm-12">
                                        <div class="price-block_one-inner">
                                            <div class="price-one_stars"
                                                style="background-image:url({{ asset('images/icons/price-stars.png') }})">
                                            </div>
                                            <div class="price-block_one-title">Professional</div>
                                            <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                            <div class="price-block_one-content">
                                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                    <div class="price-block_one-price"><sup>$</sup>9<sub>/mo</sub>
                                                    </div>
                                                    <div class="price-block_one-text">*Get Braine tailored</div>
                                                </div>
                                                <div class="price-block_one-button">
                                                    <a class="template-btn price-one_button" href="#">Start
                                                        1 month free trail</a>
                                                </div>
                                                <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to basic
                                                        tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to AI
                                                        copywriting tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Email support only
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block One -->
                                    <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                        <div class="price-block_one-inner">
                                            <div class="price-block_one-title">Enterprise</div>
                                            <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                            <div class="price-block_one-content">
                                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                    <div class="price-block_one-price"><sup>$</sup>18<sub>/mo</sub>
                                                    </div>
                                                    <div class="price-block_one-text">*Get Braine tailored</div>
                                                </div>
                                                <div class="price-block_one-button">
                                                    <a class="template-btn price-one_button" href="#">Start
                                                        1 month free trail</a>
                                                </div>
                                                <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to basic
                                                        tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to AI
                                                        copywriting tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Email support only
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-yearly">
                            <div class="content">
                                <div class="row clearfix">
                                    <!-- Price Block One -->
                                    <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                        <div class="price-block_one-inner">
                                            <div class="price-block_one-title">Starter</div>
                                            <div class="price-block_one-subtitle">Up to 2,000 words / mo</div>
                                            <div class="price-block_one-content">
                                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                    <div class="price-block_one-price"><sup>$</sup>3<sub>/mo</sub>
                                                    </div>
                                                    <div class="price-block_one-text">*Get Braine tailored</div>
                                                </div>
                                                <div class="price-block_one-button">
                                                    <a class="template-btn price-one_button" href="#">Start
                                                        1 month free trail</a>
                                                </div>
                                                <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to basic
                                                        tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to AI
                                                        copywriting tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Email support only
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block One -->
                                    <div class="price-block_one active col-lg-4 col-md-6 col-sm-12">
                                        <div class="price-block_one-inner">
                                            <div class="price-one_stars"
                                                style="background-image:url({{ asset('images/icons/price-stars.png') }})">
                                            </div>
                                            <div class="price-block_one-title">Professional</div>
                                            <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                            <div class="price-block_one-content">
                                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                    <div class="price-block_one-price"><sup>$</sup>9<sub>/mo</sub>
                                                    </div>
                                                    <div class="price-block_one-text">*Get Braine tailored</div>
                                                </div>
                                                <div class="price-block_one-button">
                                                    <a class="template-btn price-one_button" href="#">Start
                                                        1 month free trail</a>
                                                </div>
                                                <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to basic
                                                        tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to AI
                                                        copywriting tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Email support only
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block One -->
                                    <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                        <div class="price-block_one-inner">
                                            <div class="price-block_one-title">Enterprise</div>
                                            <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                            <div class="price-block_one-content">
                                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                    <div class="price-block_one-price"><sup>$</sup>18<sub>/mo</sub>
                                                    </div>
                                                    <div class="price-block_one-text">*Get Braine tailored</div>
                                                </div>
                                                <div class="price-block_one-button">
                                                    <a class="template-btn price-one_button" href="#">Start
                                                        1 month free trail</a>
                                                </div>
                                                <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to basic
                                                        tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to AI
                                                        copywriting tools</li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Email support only
                                                    </li>
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Price One -->

    <!-- Faq One -->
    <section class="faq-one">
        <div class="faq-one_bg" style="background-image:url({{ asset('images/background/faq-bg.png') }})">
        </div>
        <div class="faq-one_icon" style="background-image:url({{ asset('images/icons/step.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Tab Column -->
                <div class="faq-one_title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="faq-one_title-outer">
                        <!-- Sec Title -->
                        <div class="sec-title title-anim">
                            <div class="sec-title_title">faq</div>
                            <h2 class="sec-title_heading">Frequently asked <span>questions</span></h2>
                            <div class="sec-title_text">Lorem ipsum dolor sit amet consectetur adipiscing vitae
                                mattis tellus. Nullam quis mattis ligula consectetur.</div>
                        </div>
                        <div class="faq-one_button">
                            <a href="contact.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact now</span>
                                    <span class="text-two">Contact now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Accordian Column -->
                <div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
                    <div class="faq-one_accordian-outer">

                        <!-- Accordion Box -->
                        <ul class="accordion-box_two">

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>How does
                                    your AI copywriting tool work?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our AI copywriting tool uses sophisticated algorithms
                                            to understand context, tone, and language nuances. Users input specific
                                            details or prompts, and the AI generates high-quality content based on
                                            that input, refining.</div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>What is AI
                                    copywriting?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our AI copywriting tool uses sophisticated algorithms
                                            to understand context, tone, and language nuances. Users input specific
                                            details or prompts, and the AI generates high-quality content based on
                                            that input, refining.</div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>Can I trust
                                    the content generated by AI?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our AI copywriting tool uses sophisticated algorithms
                                            to understand context, tone, and language nuances. Users input specific
                                            details or prompts, and the AI generates high-quality content based on
                                            that input, refining.</div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>What types
                                    of content can your AI generate?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our AI copywriting tool uses sophisticated algorithms
                                            to understand context, tone, and language nuances. Users input specific
                                            details or prompts, and the AI generates high-quality content based on
                                            that input, refining.</div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>What
                                    languages does your AI support?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our AI copywriting tool uses sophisticated algorithms
                                            to understand context, tone, and language nuances. Users input specific
                                            details or prompts, and the AI generates high-quality content based on
                                            that input, refining.</div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Faq One -->

    <!-- Social One -->
    <section class="social-one">
        <div class="social-one_bg-shadow" style="background-image:url({{ asset('images/background/social-bg.png') }})">
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Integrations</div>
                <h2 class="sec-title_heading">Incorporate our tool into <br> <span>your everyday tasks</span></h2>
            </div>
            <div class="social-one_logo">
                <span><img src="{{ asset('images/icons/social-logo.png') }}" alt="" /></span>
            </div>
            <div class="inner-container">
                <div class="social-one_bg"
                    style="background-image:url({{ asset('images/background/social-one_pattern.png') }})">
                </div>
                <div class="social-one_bg-two"
                    style="background-image:url({{ asset('images/background/social-one_pattern-two.png') }})">
                </div>

                <div class="social-box_one">
                    <div class="animation_mode">
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-1.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-2.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-3.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-4.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-5.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-6.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-7.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="social-box">
                    <div class="animation_mode_two">
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-8.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-9.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-10.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-11.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-12.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-13.png') }}" alt="" />
                            </a>
                        </div>
                        <!-- Icon -->
                        <div class="social_icon-box">
                            <a href="#">
                                <img src="{{ asset('images/icons/social-14.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Social One -->

    <!-- News One -->
    <section class="news-one">
        <div class="news-one_shadow" style="background-image:url({{ asset('images/background/news-shadow-1.png') }})">
        </div>
        <div class="news-one_shadow-two"
            style="background-image:url({{ asset('images/background/news-shadow-2.png') }})">
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">our blog</div>
                <h2 class="sec-title_heading">Read our latest <span>blogs</span></h2>
            </div>
            <div class="three-item_carousel swiper-container">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- News Block One -->
                        <div class="news-block_one">
                            <div class="news-block_one-inner">
                                <div class="news-block_one-image">
                                    <a href="news-detail.html"><img src="{{ asset('images/resource/news-1.jpg') }}"
                                            alt="" /></a>
                                </div>
                                <div class="news-block_one-content">
                                    <h5 class="news-block_one-title"><a href="news-detail.html">Transforming
                                            industries and shaping the future</a></h5>
                                    <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur
                                        adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                    <div class="news-block_one-button">
                                        <a href="blog.html" class="template-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Read more</span>
                                                <span class="text-two">Read more</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- News Block One -->
                        <div class="news-block_one">
                            <div class="news-block_one-inner">
                                <div class="news-block_one-image">
                                    <a href="news-detail.html"><img src="{{ asset('images/resource/news-2.jpg') }}"
                                            alt="" /></a>
                                </div>
                                <div class="news-block_one-content">
                                    <h5 class="news-block_one-title"><a href="news-detail.html">Exploring the
                                            cutting-edge of artificial intelligence</a></h5>
                                    <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur
                                        adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                    <div class="news-block_one-button">
                                        <a href="blog.html" class="template-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Read more</span>
                                                <span class="text-two">Read more</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- News Block One -->
                        <div class="news-block_one">
                            <div class="news-block_one-inner">
                                <div class="news-block_one-image">
                                    <a href="news-detail.html"><img src="{{ asset('images/resource/news-3.jpg') }}"
                                            alt="" /></a>
                                </div>
                                <div class="news-block_one-content">
                                    <h5 class="news-block_one-title"><a href="news-detail.html">Understanding the
                                            basics of artificial intelligence</a></h5>
                                    <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur
                                        adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                    <div class="news-block_one-button">
                                        <a href="blog.html" class="template-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Read more</span>
                                                <span class="text-two">Read more</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="three-item_carousel-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End News One -->

    <!-- CTA One -->
    <section class="cta-one">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one" style="background-image:url({{ asset('images/icons/cta-icon-1.png') }})"></div>
                <div class="cta-icon_two" style="background-image:url({{ asset('images/icons/cta-icon-2.png') }})"></div>
                <div class="cta-one_card">
                    <img src="{{ asset('images/icons/cta-card.png') }}" alt="" />
                </div>
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">Craft your next great <span>content now.</span></h2>
                            <div class="cta-one_button">
                                <a href="about.html" class="template-btn btn-style-three">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get started free</span>
                                        <span class="text-two">Get started free</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_image-outer">
                            <div class="cta-one_cards">
                                <img src="{{ asset('images/icons/cta-cards.png') }}" alt="" />
                            </div>
                            <div class="image">
                                <img src="{{ asset('images/resource/cta.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->
@endsection
