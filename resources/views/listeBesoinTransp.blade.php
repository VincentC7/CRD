@extends('layouts.app')

@section('content')

    <h1 class="page-header text-center">Personnes ayant besoin d'un chauffeur </h1>
    <div class="separator2"></div>

    @if(auth()->user()->candidatures()->count()==0)
        <h5 class="text-center">Vous n'avez postulé à aucune offre</h5>
    @else
        <ul class="list-group col-md-offset-1 col-md-10 col-sm-12">
            @foreach($transports as $t)
                <li class="list-group-item">

                    {{$t->offre()->first()->profil}} -
                    {{$t->offre()->first()->categorie->nom}}
                    <a href="{{ route('afficherCandidaturePublic',['id'=>$t->id]) }}">
                        <button class="btn-sm btn-info ">Information</button></a>

                    <a class="pull-right"  href="">
                        <button class="btn-sm btn-info "> Postuler </button></a>
                </li>
            @endforeach
        </ul>
    @endif

@endsection