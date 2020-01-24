@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <form class="card">
            <div class="card-body">
                <h3 class="card-title">Modifier ce bien</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Type de bien <span class="form-required">*</span></label>
                            <select name="type" id="select-type" class="form-control custom-select">
                                <option value="2">Maison</option>
                                <option value="4">Appartement</option>
                                <option value="3">Commerce</option>
                                <option value="5">Terrain</option>
                                <option value="5">Propriété</option>
                                <option value="5">Bureau</option>
                                <option value="5">Immeuble</option>
                                <option value="5">Parking/Garage</option>
                                <option value="5">Château</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Nom du Bien</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <div class="form-label">Bien meublé ou non-meublé <span class="form-required">*</span></div>
                            <div class="custom-controls-stacked">
                                <label  class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="furnished" value="oui">
                                    <span class="custom-control-label">Oui</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="furnished" value="non">
                                    <span class="custom-control-label">Non</span>
                                </label>
                                @error('furnished')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="nb_rooms" class="form-label @error('nb_rooms') is-invalid @enderror">Nombre de chambres <span class="form-required">*</span></label>
                            <input name="nb_rooms" type="number" class="form-control" placeholder="Nombre de chambres">
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
                            <input name="size" type="number" class="form-control @error('size') is-invalid @enderror" placeholder="Taille">
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
                            <input type="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Numéro et nom rue">
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
                            <input type="address2" type="text" class="form-control @error('address2') is-invalid @enderror" placeholder="Addresse ligne 2">
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
                            <input name="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Ville" value="Melbourne">
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
                            <input name="postcode" type="number" class="form-control @error('postcode') is-invalid @enderror" placeholder="Code Postale">
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
                            <input name="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Pays">
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
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </div>
</div>

@endsection