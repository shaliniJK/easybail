@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('properties.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter un nouveau locataire
        </a>
        <div class="list-group list-group-transparent mb-0">
            <a href="../docs/index.html" class="list-group-item list-group-item-action active">
                <span class="icon mr-3"><i class="fe fe-info"></i></span>Description du bien
            </a>
        </div>
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

        <div class="card">
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
                            {{ $property->address2 .', '. $property->country }}
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="h6">Taille</div>
                        <p>{{ $property->size }} m2</p>
                    </div>
                    <div class="col-6">
                        <div class="h6">Type de bien</div>
                        <p>Meublé</p>
                    </div>
                </div>
                <div class="h6">Description</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Locataires courants</h4>
            </div>
            <table class="table card-table">
                <tbody><tr>
                    <td>
                        <strong>Jacob Thornton</strong>
                        <small class="d-block text-muted">@fat</small>
                    </td>
                    <td class="align-middle" width="1">
                        <button class="btn btn-outline-primary btn-sm">
                            <span class="fa fa-user"></span> Voir
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Dave Gamache</strong>
                        <small class="d-block text-muted">@dhg</small>
                    </td>
                    <td class="align-middle" width="1">
                        <button class="btn btn-outline-primary btn-sm">
                            <span class="fa fa-user"></span> Voir
                        </button>
                    </td>
                </tr>
                </tr>
            </tbody>
        </table>
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