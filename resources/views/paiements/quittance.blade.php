@extends('layouts.app')

@section('content')
<h3> QUITTANCE DE LOYER </h3>

<div class="col-lg-8">
    <p>
        Objet : <b>{{ $location->bailType->type }}</b></p>
    <p>
        Adresse : <b>{{ $location->property->fullAddress() }}</b>
    </p>
    <p>
        Période : {{ "{$getMonth[$paiement->month - 1]} - {$paiement->year}" }}
    </p>
    <p>
        Paiement effectué à : {{ $paiement->received_at ? date("Y/m/d", strtotime($paiement->received_at)) :'' }}
    </p>
    <p>
        Date bail : <b>{{ $location->date_signature_bail }}</b></p>
    <p>
        Date révision : 01/06/2015</p>
    <p>
        Indice IRL : 125.19</p>
    <p>
        Loyer révisé : <b>{{ $location->loyer }}</b>
    </p>
</div>

<div class="col-lg-8">
    <div class="card">
        <table class="table card-table table-vcenter">
            <tr>

                <th class="d-none d-sm-table-cell">Date</th>
                <th class="d-none d-md-table-cell">Opération</th>
                <th class="d-none d-md-table-cell">Debit</th>
                <th class="d-none d-md-table-cell">Credit</th>
                <th class="d-none d-md-table-cell">Solde</th>
            </tr>
            <tr>

                <td class="d-none d-sm-table-cell">{{ $location->date_entree }}</td>
                <td class="d-none d-md-table-cell">Loyer</td>
                <td class="d-none d-md-table-cell">{{ $location->loyer }}</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">{{ $location->loyer }}</td>

            </tr>
            <tr>

                <td class="d-none d-sm-table-cell">{{ $location->date_entree }}</td>
                <td class="d-none d-md-table-cell">Provision pour charges</td>
                <td class="d-none d-md-table-cell">{{ $location->charges }}</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">{{ $location->charges + $location->loyer}}</td>
            </tr>
            <tr>

                <td class="d-none d-sm-table-cell">{{ $paiement->received_at ? date("Y/m/d", strtotime($paiement->received_at)) :'' }}</td>
                <td class="d-none d-md-table-cell">VERSEMENT NOM LOC</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">{{ $location->charges + $location->loyer}}</td>
                <td class="d-none d-md-table-cell">0,00</td>
            </tr>
            <tr>

                <td class="d-none d-sm-table-cell">Nouveau solde</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">0,00</td>
            </tr>

        </table>
    </div>

</div>

@endsection