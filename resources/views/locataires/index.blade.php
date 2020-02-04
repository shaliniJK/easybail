@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('locataires.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter un nouveau locataire
        </a>

        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('locataires.index') }}" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Tous les locataires</a>
        </div>

        {{-- <div class="list-group list-group-transparent mb-0">
            <a href="#" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Tous les Garants</a>
        </div> --}}
    </div>
    <div class="col-lg-8">
        @include('partials.alerts')
        <div class="card">
            <table class="table card-table table-vcenter">
                <tr>
                    <th>Mes locataires</th>
                    <th class="d-none d-sm-table-cell">Locations</th>
                </tr>
                @foreach($locataires as $locataire)
                <tr>
                    <td><a href="{{ $locataire->path() }}" class="collection-item">{{ $locataire->fullName() }}</a></td>
                    <td class="d-none d-sm-table-cell">{{ $locataire->location ? $locataire->location->last()->property->designation() : 'Aucune location en cours' }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection