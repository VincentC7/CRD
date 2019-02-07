@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Voici les offres d'emploi disponibles </div>

                    <div class="panel-body">
                        @foreach ($offresEmploi as $offre)
                            <li>{{$offre->id}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection