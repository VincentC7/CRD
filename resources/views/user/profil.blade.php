@extends('layouts.app')

@section('content')

    <h1 class="text-center page-header" style="border: none">{{$user->name}}
        @if($admin)
            @if($user->admin==0)
            <button class="badge btn-danger">Promouvoir administrateur</button>
            @else
                <span class="badge badge-danger" style="background-color: darkred">Administrateur</span>
            @endif
        @endif
    </h1>
    <div class="separator2" style="width: 500px"></div>

    <section class="col-md-8 col-md-offset-2 col-sm-12 text-center">
        <h2 class="panel-heading">Description</h2>
        <div class="separator2"></div>
        @if(@is_null($user->description) || $user->description == "")
            <div><p>Aucune description</p></div>

        @else
            <div><p>{{$user->description}}</p></div>
        @endif

    </section>

@endsection