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

                        <div class="form-group">
                            <label class="form-label">adresse email</label>
                            <input class="form-control" placeholder={{ $locataire-> email }} disabled="" value={{ old('email') ?? $locataire-> email }} />
                        </div>
                        <div class="form-group">
                            <label class="form-label">adresse</label>
                            <input class="form-control" placeholder={{ $locataire-> address }} disabled="" value={{ old('address') ?? $locataire-> address }} />
                        </div>
                        <div class="form-group">
                            <label class="form-label">code postal</label>
                            <input class="form-control" placeholder={{ $locataire->postalcode }} disabled="" value={{ old('postalcode') ?? $locataire-> postalcode }} />
                        </div>
                        <div class="form-group">
                            <label class="form-label">ville</label>
                            <input class="form-control" placeholder={{ $locataire->city }} disabled="" value={{ old('city') ?? $locataire-> city }} />
                        </div>
                        <div class="form-group">
                            <label class="form-label">nationalité</label>
                            <input class="form-control" placeholder={{ $locataire->nationality }} disabled="" value={{ old('nationality') ?? $locataire-> nationality }} />
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