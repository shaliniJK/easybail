@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="card" method="POST" action="/locataires/{{ $locataire->id}}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h3 class="card-title">Modifier un Locataire</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="first_name" class="form-label">Prenom</label>
                            <input type="text" class="input form-control @error('first_name') danger @enderror" placeholder="Prenom" name="first_name" value="{{ $locataire-> first_name}}">
                            @error('first_name')
                            <p class="danger">{{$errors->first('first_name')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="last_name" class="form-label">Nom</label>
                            <input type="text" class="input form-control @error('last_name') danger @enderror" placeholder="Last Name" id="last_name" name="last_name" value="{{ $locataire-> last_name }}">
                            @error('last_name')
                            <p class="danger">{{$errors->first('last_name')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="input form-control @error('email') danger @enderror" placeholder="email" id="email" name="email" value="{{ $locataire-> email }}">
                            @error('email')
                            <p class="danger">{{$errors->first('email')}}</p>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="input form-control @error('address') danger @enderror" placeholder="adresse" id="address" name="address" value="{{ old('address') ?? $locataire-> address }}">
                            @error('address')
                            <p class="danger">{{$errors->first('address')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="input form-control @error('city') danger @enderror" placeholder="ville" id="city" name="city" value="{{ $locataire-> city }}">
                            @error('city')
                            <p class="danger">{{$errors->first('city')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label for="postalcode" class="form-label">Code postal</label>
                            <input type="number" class="input form-control @error('postalcode') danger @enderror" placeholder="code postale" id="postalcode" name="postalcode" value="{{ $locataire-> postalcode }}">
                            @error('postalcode')
                            <p class="danger">{{$errors->first('postalcode')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="nationality" class="form-label">nationalité</label>
                            <input type="text" class="input form-control @error('nationality') danger @enderror" placeholder="code postale" id="nationality" name="nationality" value="{{ $locataire->nationality }}">
                            @error('nationality')
                            <p class="danger">{{$errors->first('nationality')}}</p>
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