@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Mes locataires</h1>

    <div class="collection ">

        @foreach($locataires as $locataire)
        <a href="{{ $locataire->path() }}" class="collection-item">
            {{ $locataire->first_name }}
            {{ $locataire->last_name }}
        </a>
        @endforeach

    </div>

    <a href="/locataires/create" class="waves-effect waves-light btn">Ajouter un nouveau locataire
        <i class="material-icons right">send</i>
    </a>
</div>


@endsection