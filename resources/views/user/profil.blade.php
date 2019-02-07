@extends('layouts.app')

@section('content')

    <h1 class="text-center page-header" style="border: none">{{$user->name}}
        @if((isset($admin) && $admin) || $user->admin==1 )
            @if($user->admin==0)
            <a class="badge btn-danger" href="/profil/promote/{{$user->id }}">Promouvoir administrateur</a>
            @else
                <span class="badge badge-danger" style="background-color: darkred">Administrateur</span>
            @endif
            <h5 class="text-center">{{$user->email}}</h5>
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



        @can('modify', $user)
            <div class="separator2"></div>
            <a href="{{ route('user.edit', $user) }}" class="btn btn-dark is-link">Modifier le profil</a>
        @endcan
    </section>

@endsection