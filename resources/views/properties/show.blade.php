@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('locataires.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter un nouveau locataire
        </a>
        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('properties.edit', $property->id) }}" class="list-group-item list-group-item-action">
                <span class="icon mr-3"><i class="fe fe-edit-2"></i></span>Modifier ce bien
            </a>
        </div>
        <button type="button" class="btn btn-danger w-100 d-block mt-4" data-toggle="modal" data-target="#modal-delete-property">
            <span class="icon mr-3"><i class="fe fe-trash-2 text-white"></i></span>Supprimer
        </button>
    </div>
    <div class="col-lg-9">
        @include('partials.alerts')

        <div class="card w-100">
            <div class="card-status bg-blue"></div>
            <div class="card-header">
                <h3 class="card-title">{{ $property->designation() }}</h3>
            </div>
            <div class="card-body">
                <div class="media mb-5">
                    <div class="media-body">
                        <address class="text-muted mb-1">{{ $property->address }} </address>
                        <address class="text-muted mb-1">
                            {{ $property->city .', '. $property->postcode }}
                        </address>
                        <address class="text-muted">
                            {{( $property->address2 ? $property->address2.', ' : ''). $property->country }}
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="h6">Superficie</div>
                        <p>{{ $property->size }} m2</p>
                    </div>
                    <div class="col-6">
                        <div class="h6">Type de bien</div>
                        <p>Meublé</p>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-1">
                @if ($property->locations()->exists())
                <div class="row">
                    <div class="card-body">
                        <h5 class="card-title">Locataires courants</h5>
                    </div>
                    <table class="table card-table">
                        <tbody>
                            @foreach ($locataires as $locataire)
                            <tr>
                                <td>
                                    <strong>Dave Gamache</strong>
                                </td>
                                <td class="align-middle" width="1">
                                    <button class="btn btn-outline-primary btn-sm">
                                        <span class="fa fa-user"></span> Voir
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="row">
                    <div class="card-body">
                        <p><span class="icon mr-3"><i class="fe fe-alert-triangle text-info"></i></span> Ce bien n'est pas actuellement en location.</p>
                        <a href="{{ route('properties.create') }}" class="btn btn-outline-primary">
                            Ajouter un nouveau locataire
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Modal delete property --}}

<div id="modal-delete-property" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Attention ! Cet action est irréversible !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p>Voulez vous vraiment supprimer ce bien ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-property-form').submit();">Supprimer</button>
            </div>
            <form action="{{ route('property.delete', $property->id) }}" id="delete-property-form" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</div>

@endsection