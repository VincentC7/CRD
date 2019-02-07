@extends('layouts.app')

@section('content')

    <h1 class="text-center panel-heading">Candidature au poste de {{$candidature->offre()->first()->profil}}</h1>
    <div class="separator2"></div>
    <div class="col-md-8 col-md-offset-2">
        @if({{$candidature->transport}}==1)
        @endif

    </div>


@endsection