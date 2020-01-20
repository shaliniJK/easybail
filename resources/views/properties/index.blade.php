@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Mes biens</div>
            <div class="card-body">
                <ul>
                @foreach ($properties as $property)
                    <li>
                        <div>
                            <p>Addresse : {{ $property->address }}</p>
                            <p>Type : {{ $property->type }}</p>
                            <a href="{{ route('property', $property->id) }}">Voir plus</a>
                        </div>
                    </li>
                @endforeach
                </ul>

                <button><a href="{{ route('properties.create')}}">Ajouter un bien</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
