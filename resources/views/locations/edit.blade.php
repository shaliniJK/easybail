@extends('layouts.app')

@section('content')
<div class="row">
    <form class="card" method="POST" action="/locations/{{ $location->id}}/">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h3 class="card-title">Modifier la {{ $location->description() }}</h3>
                    <div class="row">
                        <div class="col-4">
                            <div class="h6">Le bien loué </div>
                            <p><a href="{{ route('properties.show', $location->property->id) }}">{{ $location->property->designation() }}</a></p>
                        </div>

                        <div class="col-4">
                            <div class="h6">Nom du locataire </div>
                            <p><a href="{{ route('locataires.show', $location->locataire->id) }}">{{ $location->locataire->fullName() }}</a></p>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="bail_type_id" class="form-label">Type de bail <span class="form-required">*</span></label>

                                <select name="bail_type_id" id="select-type" class="form-control custom-select @error('bail_type_id') is-invalid @enderror">
                                    <option>Choisir le type be bail</option>
                                    @foreach ($bail_types as $bail_type)
                                    <option value="{{$bail_type->id}}" {{ $location->bail_type_id == $bail_type->id ? 'selected' : '' }}>{{ $bail_type->type }}</option>
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
                                <input type="text" class="input form-control @error('loyer') is-invalid @enderror" value="{{$location->loyer}}" id="loyer" name="loyer">

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
                                <input type="text" class="input form-control @error('charges') is-invalid @enderror" value="{{$location->charges}}" id="charges" name="charges">

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
                                <input type="text" class="input form-control @error('preavis') is-invalid @enderror" value="{{$location->preavis}}" id="preavis" name="preavis">
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
                                <input type="date" class="input form-control @error('date_signature_bail') is-invalid @enderror" id="date_signature_bail" name="date_signature_bail" value="{{$location->date_signature_bail}}">

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
                                <input type="date" class="input form-control @error('date_entree') is-invalid @enderror"  id="date_entree" name="date_entree" value="{{$location->date_entree}}">

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
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>

</div>

@endsection