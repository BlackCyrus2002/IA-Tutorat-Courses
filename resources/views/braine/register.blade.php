@extends('base')
@section('title', 'Inscription')
@section('content')
    <div class="ed_pagetitle">
        <div class="ed_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>sign up</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="signup.html">sign up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                    <div class="ed_teacher_div">
                        <div class="ed_heading_top">
                            <h3>Sign up</h3>
                        </div>
                        <form class="ed_contact_form ed_toppadder40">
                            <div class="form-group">
                                <label class="control-label">User Name :</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email :</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password :</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm Password :</label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="javascript:void(0);" class="btn ed_btn ed_orange pull-right">sign up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Top section start-->
    <div class="ed_footer_wrapper">
        <div class="ed_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget text-widget">
                            <p>
                                <a href="index.html"><img src="../assets/images/footer/F_Logo.png" alt="Footer Logo" /></a>
                            </p>
                            <p>Edution is an outstanding PSD template targeting educational institutions, helping them
                                establish strong identity on the internet without any real developing knowledge.
                            </p>
                            <div class="ed_sociallink">
                                <ul>
                                    <li><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="bottom"
                                            title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="bottom"
                                            title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="bottom"
                                            title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="bottom"
                                            title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="bottom"
                                            title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget text-widget">
                            <h4 class="widget-title">find us</h4>
                            <p><i class="fa fa-safari"></i>Wimbledon Street 42a, 45290 Wimbledon, <br />United Kingdom</p>
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

                            <p><strong>@educationUK </strong> Web Design that works. Have a look at this masterpiece. <a
                                    href="javascript:void(0);">http://t.co/9j8DH93zrO</a><br />5 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
