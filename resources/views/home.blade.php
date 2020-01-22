@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue {{ Auth::user()->first_name}} </h1>
    <div class="row">
        <div class="col s6">


            <ul class="collection with-header">
                <li class="collection-header">
                    <h4>Mes biens</h4>
                </li>

                @foreach($properties as $property)
                <a href="#!" class="collection-item">{{ $property->address }}</a>
                @endforeach

            </ul>
            <a href="{{ route('properties') }}">Voir tous mes biens</a>
        </div>

        <div class="col s6">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h4>Mes informations personnels</h4>
                </li>
                <li class="collection-item">{{ Auth::user()->first_name}}</li>
                <li class="collection-item">{{ Auth::user()->last_name}}</li>
                <li class="collection-item">{{ Auth::user()->email}}</li>

            </ul>
        </div>
    </div>
</div>

</div>
@endsection