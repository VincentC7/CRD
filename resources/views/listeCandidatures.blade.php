@extends('layouts.app')

@section('content')

    <h1 class="page-header text-center">Mes Candidatures</h1>
    <div class="separator2"></div>

    @if(auth()->user()->candidatures()->count()==0)
        <h5 class="text-center">Vous n'avez postulé à aucune candidature</h5>
    @else
        <ul class="list-group">
            @foreach(auth()->user()->candidatures as $candidature)

            @endforeach
        </ul>
    @endif

@endsection