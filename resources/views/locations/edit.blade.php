@extends('layouts.app')

@section('content')
<div class="row">
    <form class="card" method="POST" action="/locations/{{ $location->id}}/edit ">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $location->description() }} </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">locataire</label>
                            <input class="form-control" placeholder={{ $location->locataire->fullName() }} disabled="" value={{  $location->locataire->fullName() }} />
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">loyer</label>
                            <input class="form-control" placeholder={{ $location->loyer}} disabled="" value={{  $location->loyer }} />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">charges</label>
                            <input class="form-control" placeholder={{ $location-> charges }} disabled="" value={{ old('charges') ?? $location-> charges }} />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">preavis</label>
                            <input class="form-control" placeholder={{ $location-> preavis }} disabled="" value={{ old('preavis') ?? $location-> preavis }} />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">signature bail</label>
                            <input class="form-control" placeholder={{ $location->date_signature_bail }} disabled="" value={{ old('date_signature_bail') ?? $location-> date_signature_bail }} />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">date entree</label>
                            <input class="form-control" placeholder={{ $location->date_entree }} disabled="" value={{ old('date_entree') ?? $location-> date_entree }} />
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection