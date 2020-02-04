@extends('layouts.app')

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Mes Paiements</h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th>Bien</th>
                        <th>Locataire</th>
                        <th>Mois</th>
                        <th>Date de paiement</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paiements as $paiement)
                    <tr>
                        <td>
                            {{ "{$paiement->location->property->designation()}, {$paiement->location->property->address}"}}
                        </td>
                        <td>
                            {{ $paiement->location->locataire->fullName() }}
                        </td>
                        <td>
                            {{ "{$paiement->month}-{$paiement->year}" }}
                        </td>
                        <td>
                            {{ $paiement->received_at ? date("Y/m/d", strtotime($paiement->received_at)) :'' }}
                        </td>
                        <td>€ {{ $paiement->location->loyer }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                require(['datatables', 'jquery'], function(datatable, $) {
                    $('.datatable').DataTable();
                });
            </script>
        </div>
    </div>
</div>

{{-- <div class="row row-cards">
    <div class="col-lg-4">
        <form class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="d-none d-sm-table-cell">Selectionner un bien et valider le paiement</div>
                </div>

                <div class="form-group">
                    <div class="form-label">Etat</div>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="validate" class="selectgroup-input">
                            <span class="selectgroup-button">Valider</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="attente" class="selectgroup-input">
                            <span class="selectgroup-button">En attente</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">Bien</div>
                    <select class="custom-select form-control">
                        @foreach($properties as $property)
                        <option value="">{{ $property-> address}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>
        </form>
    </div>
</div> --}}

@endsection