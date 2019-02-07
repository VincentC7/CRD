@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editer le Profil</div>
                <div class="panel-body">
                    <form action="POST" class="form">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <label for='name'>Identifiant</label>
                        <input type="text" name="name" placeholder="{{ $user->name }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection