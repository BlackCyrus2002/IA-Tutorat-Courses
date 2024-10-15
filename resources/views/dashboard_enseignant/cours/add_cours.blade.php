@extends('base')
@section('title', 'Ajouter un nouveau cour')
@section('content')
    <div class="ed_pagetitle">
        <div class="ed_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>S'enregistrer</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Accueil</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="#">Ajouter un cour</a></li>
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
                            <h3 style="font-weight: bold">Renseignez le formulaire</h3>
                        </div>
                        <br>
                        <form class="ed_contact_form ed_toppadder40" method="POST" enctype="multipart/form-data">
                            <div>
                                <h3 style="font-weight: bold;text-decoration:underline">Informations personnelles</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Titre du cour :</label>
                                        <input type="text" class="form-control" name="titre" id="titre" required>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Description du cour :</label>
                                        <textarea name="description" id="description" class="form-control" required placeholder="Description du cour">
                                    </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Photo :</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            accept="image/*" onchange="previewImage(event)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img id="preview" src="" alt="" style="height:200px" />

                                </div>
                            </div>
                            <div>
                                <h3 style="font-weight: bold;text-decoration:underline">Informations de connexion</h3>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email :</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password :</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm Password :</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <div style="display: flex;align-items:center">
                                <input type="checkbox" name="" id="" style="margin-right: 10px">
                                <label for="">
                                    j'ai lu la <a href="#" style="color: purple;font-weight:bold">régles</a> et la
                                    <a href="#" style="color: purple;font-weight:bold">politique de
                                        confidentialité</a>
                                </label>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-8">
                                    <p>Vous avez déjà un compte?<br>
                                        <a href="{{ route('login') }}" style="color: purple;font-weight:bold">
                                            Connectez-vous
                                        </a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <a href="javascript:void(0);" class="btn ed_btn ed_orange pull-right">Inscription</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById("preview");
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

@endsection
