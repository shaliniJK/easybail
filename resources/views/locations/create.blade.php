@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('locations.create') }}" class="btn btn-block btn-primary mb-6">
            Ajouter une nouvelle location
        </a>

        <div class="list-group list-group-transparent mb-0">
            <a href="{{ route('locations.index') }}" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Toutes les locations</a>
        </div>
    </div>

    <div class="col-lg-9">
        <div class="row">
            <form class="card" method="POST" action="{{ route('locations.store') }}">
                @csrf
                <div class="card-body">
                    <h3 class="card-title">Créer une location</h3>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Le Bien à louer <span class="form-required">*</span></label>
                                <select name="property_id" id="select-type" class="form-control custom-select @error('property_id') is-invalid @enderror">
                                    <option>Choisir le bien</option>
                                    @foreach ($properties as $property)
                                    <option value="{{$property->id}}" {{ old('property_id') == $property->id ? 'selected' : '' }}>{{ "{$property->designation()}, {$property->fullAddress()}" }}</option>
                                    @endforeach
                                </select>
                                @error('property_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="locataire_id" class="form-label">Le Locataire <span class="form-required">*</span></label>

                                <select name="locataire_id" id="select-type" class="form-control custom-select @error('locataire_id') is-invalid @enderror">
                                    <option>Choisir le locataire</option>
                                    @foreach ($locataires as $locataire)
                                    <option value="{{$locataire->id}}" {{ old('locataire_id') == $locataire->id ? 'selected' : '' }}>{{ $locataire->fullName() }}</option>
                                    @endforeach
                                </select>

                                @error('locataire_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="bail_type_id" class="form-label">Type de bail <span class="form-required">*</span></label>

                                <select name="bail_type_id" id="select-type" class="form-control custom-select @error('bail_type_id') is-invalid @enderror">
                                    <option>Choisir le type be bail</option>
                                    @foreach ($bail_types as $bail_type)
                                    <option value="{{$bail_type->id}}" {{ old('bail_type_id') == $bail_type->id ? 'selected' : '' }}>{{ $bail_type->type }}</option>
                                    @endforeach
                                </select>

                                @error('bail_type_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="loyer" class="form-label">Loyer<span class="form-required">*</span> </label>
                                <input type="text" class="input form-control @error('loyer') is-invalid @enderror" placeholder="loyer" id="loyer" name="loyer">

                                @error('loyer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="charges" class="form-label">Charges <span class="form-required">*</span> </label>
                                <input type="text" class="input form-control @error('charges') is-invalid @enderror" placeholder="charges" id="charges" name="charges">

                                @error('charges')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="preavis" class="form-label">Préavis <span class="form-required">*</span> </label>
                                <input type="text" class="input form-control @error('preavis') is-invalid @enderror" placeholder="preavis" id="preavis" name="preavis">
                                @error('preavis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="date_signature_bail" class="form-label">Date de signature du bail</label>
                                <input type="date" class="input form-control @error('date_signature_bail') is-invalid @enderror" id="date_signature_bail" name="date_signature_bail">

                                @error('date_signature_bail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="date_entree" class="form-label">Date d'entrée</label>
                                <input type="date" class="input form-control @error('date_entree') is-invalid @enderror"  id="date_entree" name="date_entree">

                                @error('date_entree')
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
</div>

@endsection