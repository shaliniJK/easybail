@extends('layouts.app')



@section('content')
<div class="container">

    <h1>Mes biens</h1>

    <div class="collection ">

        @foreach($properties as $property)
        <a href="{{ route('property', $property->id) }}" class="collection-item">
            {{ $property->type }}
            {{ $property->address }}
        </a>
        @endforeach

    </div>
    <a href="{{ route('properties.create') }}" class="waves-effect waves-light btn">Ajouter un nouveau bien
        <i class="material-icons right">send</i>
    </a>


</div>



@endsection