@extends('layouts.app')

@push('extra_js')
<script src="{{ asset('js/filtrer.js') }}"></script>
@endpush

@section('content')
<div class="container">
  <div class="row">
    <div class="text-center form-inline" style="margin-bottom: 20px;">
      <i class="fas fa-search"></i>
      <input class="form-control ml-3 w-75" type="text" placeholder="Rechercher" aria-label="Recherche" id="searchBar">
    </div>
    <div class="d-block form-inline text-center" style="margin-bottom: 20px;">
      <label for="tri" style="margin-right: 5px;">Tri :</label>
      <select name="tri" class="form-control" style="margin-right: 30px;" id="sortSelector">
        <option>Aucun</option>
        <option>Par popularité (favoris)</option>
        <option>Par date de création (croissant)</option>
        <option>Par date de création (décroissant)</option>
        <option>Par nombre de candidatures (croissant)</option>
        <option>Par nombre de candidatures (décroissant)</option>
      </select>
      <label for="hidemine" style="margin-right: 5px;">Cacher mes offres :</label>
      <input type="checkbox" name="hidemine" class="form-control" id="selfHider" userID="{{ auth()->user()->id }}">
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"> Voici les offres d'emploi disponibles </div>
      <div class="panel-body">
        @foreach ($offresEmploi as $offre)
        <li class="list-group-item text-info col-md-12 clearfix searchItem" categorie="{{$offre->categNom()}}" owner="{{ $offre->id_employer }}">
         {{$offre->categNom()}}
         <div class="text-center ">
          Nombre de candidatures pour ce post: {{ sizeof($offre->candidatures()->get() )}}
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