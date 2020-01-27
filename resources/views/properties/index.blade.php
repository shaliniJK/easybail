@extends('layouts.app')

@section('content')

<div class="page-header">
    <h1 class="page-title">
        Mes Biens
    </h1>
</div>
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('properties.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter un nouveau bien
        </a>
        <!-- Getting started -->
        <div class="list-group list-group-transparent mb-0">
            <a href="../docs/index.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Tous mes Biens</a>
        </div>
        <!-- Components -->
        <div class="list-group list-group-transparent mb-0">
            <a href="#" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-alert-triangle"></i></span>Mes Biens Vides</a>
            <a href="#" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Mes Biens en Location</a>
        </div>
    </div>
    <div class="col-lg-9">
        @include('partials.alerts')
        <div class="row row-deck">
            @foreach($properties as $property)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $property->type }}</h3>
                        <div class="card-options">
                            <a href="{{ route('property', $property->id) }}" class="btn btn-primary btn-sm">Voir plus</a>
                        </div>
                    </div>
                    <div class="card-body">
                        Locataire 1
                        <p>{{ $property->address }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection