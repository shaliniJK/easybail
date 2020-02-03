@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Bienvenue {{ $user->first_name}} </h1>

    <div class="row row-cards">
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                        <i class="fa fa-eur"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">{{ $user->$properties}} <small>Paiements</small></a></h4>
                        <small class="text-muted">Mes paiements</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                        <i class="fa fa-shopping-bag"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="/properties">{{ $properties ->count() }} <small>Biens enregistrés</small></a></h4>
                        <small class="text-muted">Mes biens</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                        <i class="fa fa-user"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="/locataires">{{ $locataires ->count() }} <small>Locataires enregistrés</small></a></h4>
                        <small class="text-muted">Mes locataires</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                        <i class="fa fa-comments"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
                        <small class="text-muted">16 waiting</small>
                    </div>
                </div>
            </div>
        </div>
        <form class="card">
            <div class="card-body">
                <h3 class="card-title">Mes informations personnels</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Address email</label>
                            <input type="email" class="form-control" placeholder={{ $user-> email}} value={{ $user-> email}}>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Prenom</label>
                            <input type="text" class="form-control" placeholder={{ $user-> first_name}} value={{ $user-> first_name}}>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder={{ $user-> last_name}} value={{ $user-> last_name}}>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Home Address">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Ville</label>
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-label">Code Postal</label>
                            <input type="number" class="form-control" placeholder="ZIP Code">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Pays</label>
                            <select class="form-control custom-select">
                                <option value="">Germany</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
        </form>

    </div>



</div>
@endsection