@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="card" method="POST" action="{{ route('property.store') }}">
            @csrf

            <div class="card-body">
                <h3 class="card-title">Ajouter un nouveau bien</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Type de bien <span class="form-required">*</span></label>
                            <select name="property_type_id" id="select-type" class="form-control custom-select @error('property_type_id') is-invalid @enderror">
                                <option>Choisir le type de bien</option>
                                @foreach ($types as $type)
                                <option value="{{$type->id}}" {{ old('property_type_id') === $type->id ? 'selected' : '' }}>{{$type->type}}</option>
                                @endforeach
                            </select>
                            @error('property_type_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <div class="form-label">Bien meublé ou non-meublé <span class="form-required">*</span></div>
                            <div class="custom-controls-stacked form-control @error('furnished') is-invalid @enderror">
                                <label class="custom-control custom-radio custom-control-inline ">
                                    <input type="radio" class="custom-control-input" name="furnished" value="1"
                                    {{ old('furnished') === '1' ? 'checked' : ''}}>
                                    <span class="custom-control-label">Meublé</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="furnished" value="0"
                                    {{ old('furnished') === '0' ? 'checked' : ''}}>
                                    <span class="custom-control-label">Non-meublé</span>
                                </label>
                            </div>
                            @error('furnished')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="nb_rooms" class="form-label">Nombre de chambres <span class="form-required">*</span></label>
                            <input name="nb_rooms" type="number" required class="form-control @error('nb_rooms') is-invalid @enderror" placeholder="Nombre de chambres" value="{{ old('nb_rooms') }}">
                            @error('nb_rooms')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="size" class="form-label">Taille en m2</label>
                            <input name="size" type="number" class="form-control @error('size') is-invalid @enderror" placeholder="Taille" value="{{ old('size') }}">
                            @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="address" class="form-label">Address <span class="form-required">*</span></label>
                            <input name="address" id="address" type="text" required class="form-control @error('address') is-invalid @enderror" placeholder="Numéro et nom rue" value="{{ old('address') }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="address2" class="form-label">Address 2</label>
                            <input name="address2" id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" placeholder="Addresse ligne 2" value="{{ old('address2') }}">
                            @error('address2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label name="city" class="form-label">Ville <span class="form-required">*</span></label>
                            <input name="city" id="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Ville" value="{{ old('city') }}" required>
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label for="postcode" class="form-label">Code Postale <span class="form-required">*</span></label>
                            <input name="postcode" id="postcode" type="number" class="form-control @error('postcode') is-invalid @enderror" placeholder="Code Postale" value="{{ old('postcode') }}" required>
                            @error('postcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label for="country" class="form-label">Pays <span class="form-required">*</span></label>
                            <input name="country" id="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Pays" value="{{ old('country') }}" required>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>
        </form>
    </div>
</div>

@endsection