@extends('layouts.app')

@section('content')

    <h1 class="text-center page-header" style="border: none">{{$offre->categNom()}}</h1>
    <div>

        Profil: {{$offre->profil}}
    </div>
@endsection