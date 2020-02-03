@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('locations.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter une nouvelle location
        </a>

        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('locations.index') }}" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Toutes mes Locations</a>
        </div>

    </div>
    <div class="col-lg-9">
        @include('partials.alerts')

        <div class="row row-deck">
            @forelse ($locations as $location)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    <div class="card-header">
                        <h3 class="card-title">{{ $location->description() }}</h3>

                    </div>
                    <div class="card-body">
                        <p>Loué à <b>{{ $location->locataire->fullName() }}</b></p>
                        <p>Montant de loyer à <b>{{ $location->loyer }}</b> euros</p>
                    </div>
                    <div class="card-footer">
                        <div class="card-options justify-content-end">
                            <a href="{{ route('locations.show', $location->id) }}" class="btn btn-primary btn-sm">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-status bg-yellow"></div>
                    <div class="card-body">
                        <h4 class="mb-3">Vous n'avez aucune location en cours !</h4>
                        <a href="{{ route('locations.create') }}" class="btn btn-block w-50 btn-primary mt-4">
                            Créer une nouvelle location
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>


@endsection