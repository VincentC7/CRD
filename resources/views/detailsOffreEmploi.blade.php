@extends('layouts.app')

@section('content')

    <h1 class="text-center page-header" style="border: none">{{$offre->categNom()}}</h1>
    <div>

        Profil : {{$offre->profil}} <Br>
        Lieu : {{$offre->lieu_travail}} <Br>
        Durée : {{$offre->durée}} <Br>
        Propose par : {{$offre->employer()}} <Br>

    </div>

    <div>
        <a href="{{ URL::to('/OffreEmplois/'.$offre->id.'/Postuler') }}"> Postuler </a>
    </div>
@endsection