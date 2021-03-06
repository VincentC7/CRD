@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editer le Profil</div>
                <div class="panel-body">
                    <form method="POST" class="form text-center col-md-offset-3" action="{{ action('UserController@update', $user) }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group col-md-8">
                            <label for="name">Identifiant</label>
                            <input type="text" name="name" id="name" class="form-control text-center{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="{{ $user->name }}" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <label for="e-mail">E-Mail</label>
                            <input type="email" name="email" id="e-mail" class="form-control text-center{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="{{ $user->email }}" value="{{ old('email') }}">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control text-center{{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Votre mot de passe" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password-confirm" class="control-label">Confirmation</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="description">Description</label>
                            <textarea type="textarea" name="description" id="description" placeholder="{{ $user->description == '' ? 'Votre description' : $user->description }}" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}"  style="resize: vertical;">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 col-md-offset-1">
                            <button type="submit" class="btn btn-primary">
                                Mettre à jour le profil
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection