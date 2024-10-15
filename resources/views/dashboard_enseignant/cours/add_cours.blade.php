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
                                        <label class="control-label">Fichier du cour :</label>
                                        <input type="file" name="fichier" id="fichier" class="form-control"
                                            accept=".pdf">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img id="preview" src="" alt="" style="height:200px" />

                                </div>
                            </div>

                            <div>
                                <center>
                                    <button type="submit" class="btn ed_btn ed_orange pull-right"
                                        style="text-transform: none">Ajouter le cour</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
