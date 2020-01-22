@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Bienvenue {{ Auth::user()->first_name}} </h1>


    <ul class="collection with-header">
        <li class="collection-header">
            <h4>Mes informations personnels</h4>
        </li>
        <li class="collection-item">{{ Auth::user()->first_name}}</li>
        <li class="collection-item">{{ Auth::user()->last_name}}</li>
        <li class="collection-item">{{ Auth::user()->email}}</li>

    </ul>


    <a href="#!" class="waves-effect waves-light btn">Modifier
        <i class="material-icons right">send</i>
    </a>


</div>
@endsection