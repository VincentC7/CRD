@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>
                <div class="panel-body">
                    </br></br>Identifiant : {{ Auth::user()->name }}
                    </br> Email: {{ Auth::user()->email }}
                    </br><a href="{{ route('user.edit', Auth::user()->id) }}"> Modifier mes informations </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection