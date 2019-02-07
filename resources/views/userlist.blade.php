@extends('layouts.app')

@section('script')

@endsection

@section('content')

    <script type="text/javascript"  src="{{ asset('js/popup.js') }}"></script>
    <ul class="list-group col-md-8 col-md-offset-2 col-sm-12">
        <h1 class="list-group-item-heading page-header text-center">Liste des utilisateurs</h1>
        <br/>
        <?php
    foreach( $users  as $user) {
        echo '<li class="list-group-item text-info col-md-12">{{$user->name}} <button onclick="ouvrirPopup('.$user->name.')" class="btn btn-info pull-right"> Description </button> </li>';
    }
        ?>
    </ul>

@endsection