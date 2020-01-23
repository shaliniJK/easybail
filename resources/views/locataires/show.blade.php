@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Locataire</span>
                    <table>
                        <tbody>
                            <tr>
                                <td>Prénom</td>
                                <td>{{ $locataire-> first_name }}</td>
                            </tr>
                            <tr>
                                <td>Nom</td>
                                <td>{{ $locataire-> last_name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $locataire-> email }}</td>
                            </tr>
                            <tr>
                                <td>Adresse</td>
                                <td>{{ $locataire->address }}</td>
                            </tr>
                            <tr>
                                <td>Code postale</td>
                                <td>{{ $locataire->postalcode }}</td>
                            </tr>
                            <tr>
                                <td>Ville</td>
                                <td>{{ $locataire->city }}</td>
                            </tr>
                            <tr>
                                <td>Nationalité</td>
                                <td>{{ $locataire->nationality }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a href=" /locataires/{{ $locataire->id}}/edit ">Modifier</a>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection