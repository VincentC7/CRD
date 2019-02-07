
@extends('layouts.app')


@section('content')

    <script type="text/javascript"  src="{{ asset('js/popup.js') }}"></script>
    <ul class="list-group col-md-8 col-md-offset-2 col-sm-12">
        <h1 class="list-group-item-heading page-header text-center">Liste des utilisateurs</h1>
        <br/>
    @foreach( $users  as $user)
        <li class="list-group-item text-info col-md-12">{{$user->name}}
            <a href="/profil/{{$user->id }}" class="btn btn-info pull-right"> Description </a>
        </li>
    @endforeach
    </ul>

@endsection
