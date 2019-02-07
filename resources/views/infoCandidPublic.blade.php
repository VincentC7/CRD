@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2 encadre">
        <h1 class="text-center panel-heading">Candidature au poste de {{$candidature->offre()->first()->profil}}</h1>
        <div class="separator2" style="width: 500px;"></div>

        <section class="text-center">
            <h3>Transport spécifique</h3>
            <p>
                @if($candidature->transport==1)
                    Type de véhicule : {{$candidature->typeVehicule}}
                @else
                    Aucun transport demandé

                @endif
            </p>

        </section>
        <div class="separator2"></div>
        <section class="border-dark text-center">
            <h3 >Lieu de départ</h3>
            <p>
                @if(is_null($candidature->lieuDep) || $candidature->lieuDep=="")
                    Non spécifié
                @else
                    {{$candidature->lieuDep}}
                @endif
            </p>
        </section>
        <section class="border-dark text-center">
            <h3 >Lieu de arrive</h3>
            <p>
              {{$candidature->offre()->first()->lieu_travail}}
            </p>
        </section>
        <div class="separator2"></div>
        <section class="border-dark text-center">
            <h3>Informations complémentaires</h3>
            <p>
                @if(is_null($candidature->infos) || $candidature->infos=="")
                    Vous n'avez spécifié aucune information supplémentaire
                @else
                    {{$candidature->infos}}
                @endif
            </p>
        </section>
    </div>


@endsection