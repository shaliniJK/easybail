@extends('layouts.app')

@section('content')


<div class="page">
    <div class="page-main">

        <div class="container">

            <div class="row">
                <div class="col-lg-3 order-lg-1 mb-4">
                    <a href="{{ route('locations.create') }}" class="btn btn-block btn-primary mb-6">
                        Ajouter un nouveau location
                    </a>

                    <div class="list-group list-group-transparent mb-0">
                        <a href="/index.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Tous les locations</a>
                    </div>

                    <div class="list-group list-group-transparent mb-0">
                        <a href="#" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Tous les Garants</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    @include('partials.alerts')
                    <div class="card">
                        <table class="table card-table table-vcenter">
                            <tr>
                                <th class="d-none d-sm-table-cell">ID Bien en location</th>
                                <th class="d-none d-sm-table-cell">Loyer</th>
                                <th class="d-none d-sm-table-cell">ID Locataire</th>
                            </tr>
                            @foreach($locations as $location)
                            <tr>


                                <td><a href="{{ $location->path() }}" class="collection-item"> {{ $location->property_id }}</a></td>
                                <td class="d-none d-sm-table-cell">{{ $location->loyer }}</td>
                                <td class="d-none d-sm-table-cell">{{ $location->locataire_id }}</td>


                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection