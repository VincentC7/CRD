@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                <div class="panel panel-default">
                    <div class="panel-heading"> Voici les offres d'emploi disponibles </div>

                    <div class="panel-body">
                        @foreach ($offresEmploi as $offre)
                            <li class="list-group-item text-info col-md-12">
                                <div>{{$offre->categNom()}}
                                    <div class="text-center ">Nombre de candidatures pour ce post: {{sizeof($offre->candidatures()->get() )}}</div></div>
                                <a href="{{URL::to('/OffreEmplois/'.$offre->id)}}" class="btn btn-info pull-right"> Détails </a></li>

                        @endforeach
                            <a href="{{URL::to('/OffreEmplois/create')}}" class="btn btn-info pull-right" style="margin-top: 20px"> Créer une offre d'emploi </a>
                    </div>
                </div>

        </div>
    </div>
@endsection