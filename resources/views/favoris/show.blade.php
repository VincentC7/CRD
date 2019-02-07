@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

    <div class="panel panel-default">
      <div class="panel-heading"> Voici vos offres d'emplois favoris </div>

      <div class="panel-body">
        @foreach ($favoris as $favori)
        <li class="list-group-item text-info col-md-12 clearfix">
         {{$favori->offre->categNom()}}
         <div class="text-center ">
          Nombre de candidatures pour ce post: {{sizeof($favori->offre->candidatures()->get() )}}
        </div>
        <span class="pull-right">
          <form method="GET" action="{{ route('favoris.change', $favori->offre) }}">
            {{ csrf_field() }}
            <button type="submit" style="background: none; padding: 0px; border: none;">
              @if(auth()->user()->hasFavoris($favori->offre))
              <i class="fas fa-star fa-2x" style="color: yellow"></i>
              @else
              <i class="far fa-star fa-2x" style="color: black"></i>
              @endif
            </button>
          </form>
          <a href="{{URL::to('/OffreEmplois/'.$favori->offre->id)}}" class="btn btn-info"> Détails </a></li>
        </span>
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection