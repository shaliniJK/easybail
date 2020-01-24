@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">location</span>
                    <table>
                        <tbody>
                            <tr>
                                <td>loyer</td>
                                <td>{{ $location-> loyer }}</td>
                            </tr>
                            <tr>
                                <td>date_entree</td>
                                <td>{{ $location-> date_entree }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a href=" /locations/{{ $location->id}}/edit ">Modifier</a>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection