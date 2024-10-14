@extends('base')
@section('title', 'Accueil EDUC-AI')
@section('content')
    @include("acceuil.slider")

    @include("acceuil.noscours")

    @include("acceuil.stats")

    @include("acceuil.aboutme")

    @include("acceuil.prestations")

    @include("acceuil.videoflash")

    @include("acceuil.localisation")

    @include("acceuil.contact")
@endsection
