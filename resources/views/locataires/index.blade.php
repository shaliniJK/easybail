@extends('layouts.app')

@section('content')

<div class="page">
    <div class="page-main">
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="row row-cards">
                    <div class="col-lg-8">
                        <div class="card">
                            <table class="table card-table table-vcenter">
                                <tr>
                                    <th>Mes locataires</th>
                                    <th class="d-none d-sm-table-cell">Date</th>
                                    <th class="d-none d-md-table-cell">Amount</th>
                                </tr>
                                @foreach($locataires as $locataire)
                                <tr>
                                    <td>{{ $locataire->last_name }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $locataire->first_name }}</td>
                                    <td class="d-none d-md-table-cell"><a href="{{ $locataire->path() }}" class="collection-item">détaille</a></td>
                                </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="/locataires/create" class="waves-effect waves-light btn">Ajouter un nouveau locataire

    </a>


</div>



@endsection