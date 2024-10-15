@extends('base')
@section('title', 'Inscription')
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
                        <li><a href="#">Inscription</a></li>
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
                            <h3 style="font-weight: bold">S'enregistrer</h3>
                        </div>
                        <br>
                        <form class="ed_contact_form ed_toppadder40">
                            <div>
                                <h3 style="font-weight: bold;text-decoration:underline">Informations personnelles</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nom :</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Prénom :</label>
                                        <input type="text" class="form-control" name="prenoms" id="prenoms" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date de naissance :</label>
                                        <input type="date" class="form-control" name="born" id="born" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Sexe :</label>
                                        <select name="sexe" id="sexe" class="form-control" required>
                                            <option value="">Selection un sexe</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Contact :</label>
                                        <input type="number" class="form-control" name="tel" id="tel" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Adresse :</label>
                                        <input type="number" class="form-control" name="adresse" id="adresse" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Etablissement/Lieu de travail :</label>
                                        <input type="text" class="form-control" name="etablissement" id="etablissement"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Domaine d'étude :</label>
                                        <input type="text" class="form-control" name="domaine" id="domaine" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Bio :</label>
                                        <textarea name="bio" id="bio" class="form-control" required placeholder="Une présentation de vous">
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
