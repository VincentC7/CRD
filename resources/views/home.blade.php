@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    Vous êtes maintenant connecté !
<<<<<<< HEAD
=======
                        <br> <br>Identifiant : {{ Auth::user()->name }}
                        <br> Email: {{ Auth::user()->email }}
                        <br><a href=""> Modifier mes informations </a>
>>>>>>> 302f057a9cc100b8cc1e9df81a15f9102e4fe819
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
