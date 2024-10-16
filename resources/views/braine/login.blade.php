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
                        <li><a href="#">Connexion</a></li>
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
                        <form method="post" enctype="multipart/form-data" class="ed_contact_form ed_toppadder40">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Email :</label>
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control" required>
                                @error("email")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mot de passe :</label>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control" required>
                                @error("password")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label class="control-label">Confirm Password :</label>
                                <input type="password" class="form-control" required>
                            </div> --}}
                            <div style="display: flex;align-items:center">
                                <input type="checkbox" name="lu" id="" style="margin-right: 10px">
                                <label for="">
                                    j'ai lu la <a href="#" style="color: purple;font-weight:bold">régles</a> et la
                                    <a href="#" style="color: purple;font-weight:bold">politique de
                                        confidentialité</a>
                                </label>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-8">
                                    <p>Vous avez déjà un compte?<br>
                                        <a href="{{ route('braine.register') }}" style="color: purple;font-weight:bold">
                                            S'inscrire
                                        </a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <input type="submit" class="btn ed_btn ed_orange pull-right" value="Connexion">
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
