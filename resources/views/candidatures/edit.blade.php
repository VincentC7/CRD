@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer votre candidature</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('doEditerCandidature',  ['candidature'=>$candidature] )}}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('transp') ? ' has-error' : '' }}">
                                <label for="transp" class="col-md-4 control-label"> Besoin d'un transport </label>

                                <div class="col-md-6">
                                    <input id="transp" type="checkbox" name="transp" value="{{ old('transport') }}">

                                    @if ($errors->has('transp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('transp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lieuDep') ? ' has-error' : '' }}">
                                <label for="lieuDep" class="col-md-4 control-label"> Lieu de départ (Facultatif) </label>

                                <div class="col-md-6">
                                    <input id="lieuDep" type="text" class="form-control" name="lieuDep" placeholder="{{$candidature->lieu_dep}}">

                                    @if ($errors->has('lieuDep'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lieuDep') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('typeVehicule') ? ' has-error' : '' }}">
                                <label for="typeVehicule" class="col-md-4 control-label"> Véhicule (Facultatif) </label>

                                <div class="col-md-6">
                                    <input id="typeVehicule" type="text" class="form-control" name="typeVehicule" placeholder="{{$candidature->typeVehicule}}">

                                    @if ($errors->has('typeVehicule'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('typeVehicule') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('infoComp') ? ' has-error' : '' }}">
                                <label for="infoComp" class="col-md-4 control-label"> Information Complémentaire </label>

                                <div class="col-md-6">
                                    <textarea name="infoComp" class="form-control" style="resize: vertical;" placeholder="{{$candidature->infos}}"> </textarea>

                                    @if ($errors->has('infoComp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('infoComp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Modifier
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