@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('locations.create') }}" class="btn btn-block btn-primary mb-6">
            Associer à une location
        </a>
        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('locataires.edit', $locataire->id) }}" class="list-group-item list-group-item-action">
                <span class="icon mr-3"><i class="fe fe-edit-2"></i></span>Modifier ce locataire
            </a>
        </div>
        <button type="button" class="btn btn-danger w-100 d-block mt-4" data-toggle="modal" data-target="#modal-delete-locataire">
            <span class="icon mr-3"><i class="fe fe-trash-2 text-white"></i></span>Supprimer
        </button>
    </div>
    <div class="col-lg-9">
        @include('partials.alerts')

        <div class="card w-100">
            <div class="card-status bg-blue"></div>
            <div class="card-header">
                <h3 class="card-title">{{ $locataire->fullName() }}</h3>
            </div>
            <div class="card-body">
                <div class="media mb-5">
                    <div class="media-body">
                        <address class="text-muted mb-1">{{ $locataire->address }} </address>
                        <address class="text-muted mb-1">
                            {{ $locataire->city .', '. $locataire->postcode }}
                        </address>
                        <address class="text-muted">
                            {{ $locataire->country }}
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="h6">Numéro de téléphone</div>
                        <p>{{ $locataire->phone_number }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Email</div>
                        <p>{{ $locataire->email }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Numéro de carte identité</div>
                        <p>{{ $locataire->idcard_number }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Nationalité</div>
                        <p>{{ $locataire->nationality }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Date naissance</div>
                        <p>{{ $locataire->birth_date }}</p>
                    </div>
                    <div class="col-4">
                        <div class="h6">Lieu de naissance</div>
                        <p>{{ $locataire->place_of_birth }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-1">
                @if ($locataire->location()->exists())
                <div class="row">
                    <div class="col-8 card-body">
                        <h5 class="card-title">Locations</h5>
                    </div>
                    <div class="col-8">
                        <table class="table card-table ">
                            <tbody>
                                @foreach ($locataire->location as $location)
                                <tr>
                                    <td>
                                        <strong>{{ $location->property->designation() }}</strong>
                                    </td>
                                    <td class="align-middle" width="1">
                                        <a href="{{ route('locations.show', $location->id) }}" class="btn btn-outline-primary btn-sm">
                                            <span class="fa fa-user"></span> Voir
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="card-body">
                        <p><span class="icon mr-3"><i class="fe fe-alert-triangle text-info"></i></span> Ce locataire n'est pas actuellement associé à aucune location.</p>
                        <a href="{{ route('locations.create') }}" class="btn btn-outline-primary">
                            Créer une nouvelle location
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


{{-- Modal delete locataire --}}

<div id="modal-delete-locataire" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Attention ! Cet action est irréversible !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p>Voulez vous vraiment supprimer ce locataire ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-locataire-form').submit();">Supprimer</button>
            </div>
            <form action="{{ route('locataires.delete', $locataire->id) }}" id="delete-locataire-form" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</div>

@endsection