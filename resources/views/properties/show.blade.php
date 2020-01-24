@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1 class="page-title">
        Studio du 93 rue d'Isly
    </h1>
</div>
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('properties.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter un nouveau locataire
        </a>
        <!-- Getting started -->
        <div class="list-group list-group-transparent mb-0">
            <a href="../docs/index.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-info"></i></span>Description du bien</a>
        </div>
        <!-- Components -->
        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('property.edit', $property->id) }}" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-edit-2"></i></span>Modifier ce bien</a>
            <a href="#" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Supprimer</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-status bg-purple"></div>
            <div class="card-header">
                <h3 class="card-title">Client card</h3>
            </div>
            <div class="card-body">
                <div class="media mb-5">
                    <div class="media-body">
                        <h5>{{ $property->fullAddress() }}</h5>
                        <address class="text-muted small">
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
                    <div class="col-6">
                        <div class="h6">Website</div>
                        <p><a href="javascript:void(0)">http://www.axa.com</a></p>
                    </div>
                    <div class="col-6">
                        <div class="h6">Office Phone</div>
                        <p>+123456789</p>
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
                    <td class="align-middle" width="1">
                        <span class="avatar avatar-md" style="background-image: url(demo/faces/male/42.jpg)"></span>
                    </td>
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
                    <td class="align-middle" width="1">
                        <span class="avatar avatar-md" style="background-image: url(demo/faces/male/2.jpg)"></span>
                    </td>
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
                <tr>
                    <td class="align-middle" width="1">
                        <span class="avatar avatar-md" style="background-image: url(demo/faces/female/25.jpg)"></span>
                    </td>
                    <td>
                        <strong>Mark Otto</strong>
                        <small class="d-block text-muted">@mdo</small>
                    </td>
                    <td class="align-middle" width="1">
                        <button class="btn btn-outline-primary btn-sm">
                            <span class="fa fa-user"></span> Voir
                        </button>
                    </td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>
@endsection