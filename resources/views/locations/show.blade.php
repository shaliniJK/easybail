@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('locations.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter une nouvelle location
        </a>
        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('paiements.create', $location->id) }}" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Enregistrer un paiement</a>
        </div>
        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('paiements.createEcheance', $location->id) }}" class="list-group-item list-group-item-action "><span class="icon mr-3"><i class="fe fe-flag"></i></span>Envoyer un avis d'écheance de paiement</a>
        </div>
        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('locations.edit', $location->id) }}" class="list-group-item list-group-item-action">
                <span class="icon mr-3"><i class="fe fe-edit-2"></i></span>Modifier cette location
            </a>
        </div>
        {{-- <button type="button" class="btn btn-danger w-100 d-block mt-4" data-toggle="modal" data-target="#modal-archive-location">
            <span class="icon mr-3"><i class="fe fe-trash-2 text-white"></i></span>Archiver cette location
        </button> --}}
    </div>
    <div class="col-lg-9">
        @include('partials.alerts')

        <div class="card w-100">
            <div class="card-status bg-blue"></div>
            <div class="card-header">
                <h3 class="card-title">{{ $location->description() }}</h3>
            </div>
            <div class="card-body">
                <div class="media mb-5">
                    <div class="media-body row">
                        <div class="col-6">
                            <address class="text-muted mb-1">{{ $location->property->address }} </address>
                        <address class="text-muted mb-1">
                            {{ $location->property->city .', '. $location->property->postcode }}
                        </address>
                        <address class="text-muted">
                            {{( $location->property->address2 ? $location->property->address2.', ' : ''). $location->property->country }}
                        </address>
                        </div>
                        <div class="col-6">
                            <div class="h6">{{ $location->bailType->type }}</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="h6">Nom du locataire </div>
                        <p><a href="{{ route('locataires.show', $location->locataire->id) }}">{{ $location->locataire->fullName() }}</a></p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Montant de loyer</div>
                        <p><b>{{ $location->loyer }}</b> euros</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Charges</div>
                        <p>{{ $location->charges }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Date de signature du bail</div>
                        <p>{{ $location->date_signature_bail }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Date d'entrée</div>
                        <p>{{ $location->date_entree }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Préavis</div>
                        <p>{{ $location->preavis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection