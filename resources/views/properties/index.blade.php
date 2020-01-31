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
            <a href="{{ route('properties') }}" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Tous mes Biens</a>
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

            @forelse($properties as $property)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $property->designation() }}</h3>
                        <div class="card-options">
                            <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary btn-sm">Voir plus</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{ $property->address }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-status bg-yellow"></div>
                    <div class="card-body">
                        <h4 class="mb-3">Vous n'avez pas encore ajouté vos biens !</h4>
                        <a href="{{ route('properties.create') }}" class="btn btn-block w-50 btn-primary mt-4">
                            Ajouter un bien
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection