@extends('layouts.app')

@section('content')


    <div class="col-md-offset-2 col-md-8 text-center encadre text-center">
        <h1 class="text-center page-header panel-heading" style="border: none">{{$offre->categNom()}}</h1>
        <div class="separator2" style="width: 500px"></div>
        <section>
            <h3>Profil</h3>
            <div class="separator2"></div>
            {{$offre->profil}}
        </section>
        <h3>Lieu</h3>
        <div class="separator2"></div>
         {{$offre->lieu_travail}}
        <h3>Durée</h3>
        <div class="separator2"></div>
         {{$offre->durée}}
        <h3> Proposé par</h3>
        <div class="separator2"></div>
        {{$offre->employer()->name}} <Br>
        <Br>
        @if(auth()->user()->id != $offre->employer()->id && auth()->user()->candidatures()->where('id','=',$offre->id)->count()==0)
        <a href="{{ URL::to('/OffreEmplois/'.$offre->id.'/Postuler') }}"> <button class="btn btn-success"> Postuler </button></a>
        @endif
    </div>

    <div >

    </div>
@endsection