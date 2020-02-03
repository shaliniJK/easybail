@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="card" method="POST" action="{{ route('locataires.store') }}">
            @csrf
            <div class="card-body">
                <h3 class="card-title">Créer un Locataire</h3>
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="first_name" class="form-label">Prenom <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('first_name') is-invalid @enderror" placeholder="Prenom" name="first_name" value="{{ old('first_name')}}">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="last_name" class="form-label">Nom <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email" class="form-label">Adresse email <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('email') is-invalid @enderror" placeholder="email" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address" class="form-label">Addresse postale <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('address') is-invalid @enderror" placeholder="adresse" id="address" name="address" value="{{ old('address') }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="city" class="form-label">Ville</label>
                            <input type="text" class="input form-control @error('city') is-invalid @enderror" placeholder="ville" id="city" name="city" value="{{ old('city') }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="postcode" class="form-label">Code postal</label>
                            <input type="text" class="input form-control @error('postalcode') is-invalid @enderror" placeholder="code postale" id="postcode" name="postalcode" value="{{ old('postalcode') }}">
                            @error('postalcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="country" class="form-label">Pays</label>
                            <input name="country" id="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Pays" value="{{ old('country') }}" required>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="birth_date" class="form-label">Date de naissance</label>
                            <input type="date" class="input form-control @error('birth_date') is-invalid @enderror" placeholder="Date de naissance" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
                            @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="place_of_birth" class="form-label">Lieu de naissance</label>
                            <input type="text" class="input form-control @error('place_of_birth') is-invalid @enderror" placeholder="lieu de naissance" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth') }}">
                            @error('place_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="nationality" class="form-label">Nationalité</label>
                            <input type="text" class="input form-control @error('nationality') is-invalid @enderror" placeholder="nationalité" id="nationality" name="nationality" value="{{ old('nationality') }}">
                            @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="phone_number" class="form-label">Numéro de télèphone</label>
                            <input type="text" class="input form-control @error('phone_number') is-invalid @enderror" placeholder="Numéro de télèphone" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="idcard_number" class="form-label">Numéro de pièce d'identité</label>
                            <input type="text" class="input form-control @error('idcard_number') is-invalid @enderror" placeholder="Numéro de pièce d'identité" id="idcard_number" name="idcard_number" value="{{ old('idcard_number') }}">
                            @error('idcard_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection