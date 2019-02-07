@extends('layouts.app')

@section('content')

    <h1 class="page-header text-center">Candidatures pour ce poste</h1>
    <div class="separator2"></div>

    @if( empty($listeC))
        <h5 class="text-center">Vous n'avez postulé à aucune candidature</h5>
    @else
        <ul class="list-group col-md-offset-1 col-md-10 col-sm-12">
            @foreach($listeC as $candidature)
                <li class="list-group-item">

                    {{$candidature->offre()->first()->profil}} -
                    {{$candidature->offre()->first()->categorie->nom}}
                    <a href="{{route('traiter_candidature', ['candidature'=>$candidature->id])}}"><button class="btn-sm btn-info ">Traiter</button></a>

                    <span class="badge badge-info pull-right" style="background-color: #4286f4">{{$candidature->etat}}</span>

                </li>
            @endforeach
        </ul>
    @endif

@endsection