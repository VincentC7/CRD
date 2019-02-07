@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading"> Mes Offres d'emplois </div>

                <div class="panel-body">
                    @foreach ($mesOffres as $offre)
                        <li class="list-group-item text-info col-md-12 clearfix"> {{$offre->categNom()}}
                            <a href="{{URL::to('/OffreEmplois/'.$offre->id)}}" class="btn btn-info pull-right"> Détails </a></li>

                    @endforeach
                    <a href="{{URL::to('/OffreEmplois/create')}}" class="btn btn-info pull-right" style="margin-top: 20px"> Créer une offre d'emploi </a>
                </div>
            </div>

        </div>
    </div>
@endsection