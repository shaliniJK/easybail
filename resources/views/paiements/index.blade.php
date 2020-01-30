@extends('layouts.app')

@section('content')
<div class="page">
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards">
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
                <div class="col-lg-8">
                    <div class="card">
                        <table class="table card-table table-vcenter">
                            <tr>
                                <th class="w-1"></th>
                                <th class="d-none d-sm-table-cell">Derniers paiements</th>
                                <th class="d-none d-md-table-cell">Mois</th>
                                <th class="d-none d-md-table-cell">Montant</th>
                            </tr>
                            <tr>
                                <th>
                                </th>
                                <td>Recu</td>
                                <td class="d-none d-sm-table-cell">{{ $paiements}}</td>
                                <td class="d-none d-md-table-cell">$1616.70</td>
                            </tr>
                            <tr>
                                <th>
                                </th>
                                <td>Recu</td>
                                <td class="d-none d-sm-table-cell">xxxxxxxxxx</td>
                                <td class="d-none d-md-table-cell">$1616.70</td>
                            </tr>
                            <tr>
                                <th>
                                </th>
                                <td>Recu</td>
                                <td class="d-none d-sm-table-cell">xxxxxxxxxx</td>
                                <td class="d-none d-md-table-cell">$1616.70</td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection