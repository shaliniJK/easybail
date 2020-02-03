@extends('layouts.app')

@section('content')
<h3> QUITTANCE DE LOYER </h3>

<div class="col-lg-8">
    <p>
        Objet : Location HABITATION</p>
    <p>
        Adresse : 3 rue des Sarrazins
        59000 LILLE</p>
    <p>
        Période : du 01/02/2016 au 29/02/2016</p>
    <p>
        Date bail : 01/06/2015</p>
    <p>
        Date révision : 01/06/2015</p>
    <p>
        Indice IRL : 125.19</p>
    <p>
        Loyer révisé : 610.0
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

                <td class="d-none d-sm-table-cell">01/03/2016</td>
                <td class="d-none d-md-table-cell">Loyer</td>
                <td class="d-none d-md-table-cell">610,00</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">610,00</td>

            </tr>
            <tr>

                <td class="d-none d-sm-table-cell">01/03/2016</td>
                <td class="d-none d-md-table-cell">Provision pour charges</td>
                <td class="d-none d-md-table-cell">50,00</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">660,00</td>
            </tr>
            <tr>

                <td class="d-none d-sm-table-cell">15/03/2016</td>
                <td class="d-none d-md-table-cell">VERSEMENT NOM LOC</td>
                <td class="d-none d-md-table-cell"></td>
                <td class="d-none d-md-table-cell">660,00</td>
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