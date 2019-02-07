@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Voici les offres d'emploi disponibles </div>

                    <div class="panel-body">
                        @foreach ($offresEmploi as $offre)
                            <li> {{$offre->categNom($offre->id)}}: {{$offre->profil}}, {{$offre->lieu_travail}}</li>
                        @endforeach
                            <a href="/OffreEmplois/create"> Créer une offre d'emploi </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection