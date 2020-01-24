@extends('layouts.app')

@section('content')
{{--

    <h2>Mes Biens</h2>
    <div class="collection ">
        @foreach($properties as $property)
        <a href="{{ route('property', $property->id) }}" class="collection-item">
            {{ $property->type }}
            {{ $property->address }}
        </a>
        @endforeach
    </div>
    --}}

    <div class="row row-cards row-deck">
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
                <div class="row row-deck">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Studio Cormontaigne</h3>
                                <div class="card-options">
                                    <a href="#" class="btn btn-primary btn-sm">Voir plus</a>
                                </div>
                            </div>
                            <div class="card-body">
                                Locataire 1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Studio 93 rue d'Isly</h3>
                                <div class="card-options">
                                    <a href="#" class="btn btn-primary btn-sm">Voir plus</a>
                                </div>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Studio 93 rue d'Isly</h3>
                                <div class="card-options">
                                    <a href="#" class="btn btn-primary btn-sm">Voir plus</a>
                                </div>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection