@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="card" method="POST" action="{{ route('locataires.index') }}">
            @csrf
            <div class="card-body">
                <h3 class="card-title">Créer un Locataire</h3>
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="first_name" class="form-label">Prenom <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('first_name') danger @enderror" placeholder="Prenom" name="first_name" value="{{ old('first_name')}}">
                            @error('first_name')
                            <p class="danger">{{$errors->first('first_name')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="last_name" class="form-label">Nom <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('last_name') danger @enderror" placeholder="Last Name" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            @error('last_name')
                            <p class="danger">{{$errors->first('last_name')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email" class="form-label">Adresse email <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('email') danger @enderror" placeholder="email" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <p class="danger">{{$errors->first('email')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address" class="form-label">Addresse postale <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('address') danger @enderror" placeholder="adresse" id="address" name="address" value="{{ old('address') }}">
                            @error('address')
                            <p class="danger">{{$errors->first('address')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="city" class="form-label">Ville</label>
                            <input type="text" class="input form-control @error('city') danger @enderror" placeholder="ville" id="city" name="city" value="{{ old('city') }}">
                            @error('city')
                            <p class="danger">{{$errors->first('city')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="postcode" class="form-label">Code postal</label>
                            <input type="number" class="input form-control @error('postalcode') danger @enderror" placeholder="code postale" id="postcode" name="postalcode" value="{{ old('postalcode') }}">
                            @error('postalcode')
                            <p class="danger">{{$errors->first('postalcode')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Pays</label>
                            <select class="form-control custom-select">
                                <option value="">France</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="birth_date" class="form-label">Date de naissance</label>
                            <input type="text" class="input form-control @error('birth_date') danger @enderror" placeholder="Date de naissance" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
                            @error('birth_date')
                            <p class="danger">{{$errors->first('birth_date')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="place_of_birth" class="form-label">Lieu de naissance</label>
                            <input type="text" class="input form-control @error('place_of_birth') danger @enderror" placeholder="lieu de naissance" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth') }}">
                            @error('place_of_birth')
                            <p class="danger">{{$errors->first('place_of_birth')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="nationality" class="form-label">Nationalité</label>
                            <input type="text" class="input form-control @error('nationality') danger @enderror" placeholder="nationalité" id="nationality" name="nationality" value="{{ old('nationality') }}">
                            @error('nationality')
                            <p class="danger">{{$errors->first('nationality')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="phone_number" class="form-label">numéro de télèplone</label>
                            <input type="text" class="input form-control @error('phone_number') danger @enderror" placeholder="numéro de télèplone" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <p class="danger">{{$errors->first('phone_number')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="idcard_number" class="form-label">pièce d'identité</label>
                            <input type="text" class="input form-control @error('idcard_number') danger @enderror" placeholder="pièce d'identité" id="idcard_number" name="idcard_number" value="{{ old('idcard_number') }}">
                            @error('idcard_number')
                            <p class="danger">{{$errors->first('idcard_number')}}</p>
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