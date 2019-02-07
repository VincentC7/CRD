@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> <h2> Cerrer une nouvelle offre </h2> </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ action('OffreEmploisController@store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('descriptionPoste') ? ' has-error' : '' }}">
                                <label for="descriptionPoste" class="col-md-4 control-label"> Profil du poste </label>

                                <div class="col-md-6">
                                    <textarea name="descriptionPoste" class="textarea" placeholder="Description du poste" > {{old('descriptionPoste')}}</textarea>
                                    @if ($errors->has('descriptionPoste'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('descriptionPoste') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('duree') ? ' has-error' : '' }}">
                                <label for="duree" class="col-md-4 control-label"> Duree du poste </label>

                                <div class="col-md-6">
                                    <input id="duree" type="text" class="form-control" name="duree" value="{{ old('duree') }}" required>

                                    @if ($errors->has('duree'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('duree') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lieu') ? ' has-error' : '' }}">
                                <label for="lieu" class="col-md-4 control-label"> Lieu du travail </label>

                                <div class="col-md-6">
                                    <input id="lieu" type="text" class="form-control" name="lieu" value="{{ old('lieu') }}" required>

                                    @if ($errors->has('lieu'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lieu') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('categorie') ? ' has-error' : '' }}">
                                <label for="categorie" class="col-md-4 control-label"> Categorie </label>

                                <div class="col-md-6">
                                    <select name="categorie">
                                        @foreach($listeCate as $c)
                                            <option value="{{$c->nom}}">{{$c->nom}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('categorie'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('categorie') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Creer l'offre
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
