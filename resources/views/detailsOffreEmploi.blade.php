@extends('layouts.app')

@section('content')

    <h1 class="text-center page-header" style="border: none">{{$offre->categNom()}}</h1>
    <div class="col-md-offset-2 col-md-8 text-center ">

        Profil : {{$offre->profil}} <br/>
        Lieu : {{$offre->lieu_travail}} <Br>
        Durée : {{$offre->durée}} <Br>
        Proposé par : {{$offre->employer()->name}} <Br>
        @if(auth()->user()->id != $offre->employer()->id && !auth()->user()->candidatures()->where('id','=',$offre->id))
        <a href="{{ URL::to('/OffreEmplois/'.$offre->id.'/Postuler') }}"> <button class="btn btn-success"> Postuler </button></a>
        @endif
    </div>

    <div >

    </div>
@endsection