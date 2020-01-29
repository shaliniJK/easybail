@extends('layouts.app')

@section('content')

<div class="container">

    <div class="page">
        <div class="page-main">
            @include('partials.alerts')

            <form class="card" method="POST" action="/locataires/{{ $locataire->id}}/edit ">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $locataire-> first_name }} {{ old('last_name') ?? $locataire-> last_name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">adresse email</label>
                                    <input class="form-control" placeholder={{ $locataire-> email }} disabled="" value={{ old('email') ?? $locataire-> email }} />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">adresse</label>
                                    <input class="form-control" placeholder={{ $locataire-> address }} disabled="" value={{ old('address') ?? $locataire-> address }} />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">

                                <div class="form-group">
                                    <label class="form-label">code postal</label>
                                    <input class="form-control" placeholder={{ $locataire->postalcode }} disabled="" value={{ old('postalcode') ?? $locataire-> postalcode }} />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">ville</label>
                                    <input class="form-control" placeholder={{ $locataire->city }} disabled="" value={{ old('city') ?? $locataire-> city }} />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">pays</label>
                                    <input class="form-control" placeholder={{ $locataire->country }} disabled="" value={{ old('country') ?? $locataire-> country }} />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">date de naissance</label>
                                    <input class="form-control" placeholder={{ $locataire->birth_date }} disabled="" value={{ old('birth_date') ?? $locataire-> birth_date }} />
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">lieu de naissance</label>
                                    <input class="form-control" placeholder={{ $locataire->place_of_birth }} disabled="" value={{ old('place_of_birth') ?? $locataire-> place_of_birth }} />
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">nationalité</label>
                                    <input class="form-control" placeholder={{ $locataire->nationality }} disabled="" value={{ old('nationality') ?? $locataire-> nationality }} />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">numéro de télèphone</label>
                                    <input class="form-control" placeholder={{ $locataire->phone_number }} disabled="" value={{ old('phone_number') ?? $locataire-> phone_number }} />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">numéro de carte d'identité</label>
                                    <input class="form-control" placeholder={{ $locataire->idcard_number }} disabled="" value={{ old('idcard_number') ?? $locataire-> idcard_number }} />
                                </div>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>




<div class="card-action">
    <a href=" /locataires/{{ $locataire->id}}/edit ">Modifier</a>

</div>

@endsection