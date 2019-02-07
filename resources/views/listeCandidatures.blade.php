@extends('layouts.app')

@section('content')

    <h1 class="page-header text-center">Mes Candidatures</h1>
    <div class="separator2"></div>

    @if(auth()->user()->candidatures()->count()==0)
        <h5 class="text-center">Vous n'avez postulé à aucune offre</h5>
    @else
        <ul class="list-group col-md-offset-1 col-md-10 col-sm-12">
            @foreach(auth()->user()->candidatures as $candidature)
                <li class="list-group-item">

                    {{$candidature->offre()->first()->profil}} -
                        {{$candidature->offre()->first()->categorie->nom}}
                    <a href="{{\Illuminate\Support\Facades\URL::to('/profil/candidature', ['id'=>$candidature->id])}}"><button class="btn-sm btn-info ">Details</button></a>

                    <span class="badge badge-info pull-right" style="background-color: #4286f4">{{$candidature->etat}}</span>

                </li>
            @endforeach
        </ul>
    @endif

@endsection