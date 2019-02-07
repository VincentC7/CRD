@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

    <div class="panel panel-default">
      <div class="panel-heading"> Voici les offres d'emploi disponibles </div>

      <div class="panel-body">
        @foreach ($offresEmploi as $offre)
        <li class="list-group-item text-info col-md-12 clearfix">
         {{$offre->categNom()}}
         <div class="text-center ">
          Nombre de candidatures pour ce post: {{sizeof($offre->candidatures()->get() )}}
        </div>
        <span class="pull-right">
          <form method="GET" action="{{ route('favoris.change', $offre) }}">
            {{ csrf_field() }}
            <button type="submit" style="background: none; padding: 0px; border: none;">
              @if(auth()->user()->hasFavoris($offre))
              <i class="fas fa-star fa-2x" style="color: yellow"></i>
              @else
              <i class="far fa-star fa-2x" style="color: black"></i>
              @endif
            </button>
          </form>
          <a href="{{URL::to('/OffreEmplois/'.$offre->id)}}" class="btn btn-info"> Détails </a></li>
        </span>
        @endforeach
        <a href="{{URL::to('/OffreEmplois/create')}}" class="btn btn-info pull-right" style="margin-top: 20px"> Créer une offre d'emploi </a>
      </div>
    </div>

        </div>
    </div>
@endsection