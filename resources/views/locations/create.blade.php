@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="card" method="POST" action="{{ route('locataires.index') }}">
            @csrf
            <div class="card-body">
                <h3 class="card-title">Créer une location</h3>
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="property_id" class="form-label">id bien <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('property_id') danger @enderror" placeholder="id bien" name="property_id">
                            @error('property_id')
                            <p class="danger">{{$errors->first('property_id')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="locataire_id" class="form-label">locataire_id<span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('locataire_id') danger @enderror" placeholder="locataire_id" id="locataire_id" name="locataire_id">
                            @error('locataire_id')
                            <p class="danger">{{$errors->first('locataire_id')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="loyer" class="form-label">loyer<span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('loyer') danger @enderror" placeholder="loyer" id="loyer" name="loyer">
                            @error('loyer')
                            <p class="danger">{{$errors->first('loyer')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="charges" class="form-label">charges <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('charges') danger @enderror" placeholder="charges" id="charges" name="charges">
                            @error('charges')
                            <p class="danger">{{$errors->first('charges')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="preavis" class="form-label">preavis <span class="form-required">*</span> </label>
                            <input type="text" class="input form-control @error('preavis') danger @enderror" placeholder="preavis" id="preavis" name="preavis">
                            @error('preavis')
                            <p class="danger">{{$errors->first('preavis')}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="date_signature_bail" class="form-label">date signature bail</label>
                            <input type="text" class="input form-control @error('date_signature_bail') danger @enderror" placeholder="date signature bail" id="date_signature_bail" name="date_signature_bail">
                            @error('date_signature_bail')
                            <p class="danger">{{$errors->first('date_signature_bail')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="date_entree" class="form-label">Date entree</label>
                            <input type="text" class="input form-control @error('date_entree') danger @enderror" placeholder="Date entree" id="date_entree" name="date_entree">
                            @error('date_entree')
                            <p class="danger">{{$errors->first('date_entree')}}</p>
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