@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2 encadre">
        <h1 class="text-center panel-heading">Candidature au poste de {{$candidature->offre()->first()->profil}}</h1>
        <div class="separator2" style="width: 500px;"></div>

        <section class="text-center">
            <h3>Transport spécifique</h3>
            <p>
            @if($candidature->transport==1)
                    Type de véhicule : {{$candidature->type}}
             @else
                    Aucun transport demandé

             @endif
        </p>

        </section>
        <div class="separator2"></div>
        <section class="border-dark text-center">
            <h3 >Lieu de départ</h3>
            <p>
            @if(is_null($candidature->lieu_dep) || $candidature->lieu_dep=="")
                Non spécifié
            @else
                {{$candidature->lieu_dep}}
            @endif
            </p>
        </section>
        <div class="separator2"></div>
        <section class="border-dark text-center">
            <h3>Informations complémentaires</h3>
            <p>
                @if(is_null($candidature->lieu_dep) || $candidature->lieu_dep=="")
                    Vous n'avez spécifié aucune information supplémentaire
                @else
                    {{$candidature}}->infos
                @endif
            </p>
        </section>
        <h3 class="text-center">Votre candidature est {{$candidature->etat}}</h3>
        <div class="text-center center-block">
            <a href="{{URL::to('/OffreEmplois/'.$candidature->offre()->first()->id)}}"><button class="btn-lg btn-info">Voir l'offre</button></a>
        </div>
        <br>
        <div class="text-center center-block">
            <a href="{{URL::to('/profil/candidature/'.$candidature->id.'/edit')}}"><button class="btn-lg btn-dark">Modifier la candidature</button></a>
        </div>
        <br>
        <div class="text-center center-block">
            <a href=""><button class="btn-lg btn-danger">Supprimer la candidature</button></a>
        </div>




    </div>


@endsection