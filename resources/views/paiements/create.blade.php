@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-9">
        @include('partials.alerts')

        <div class="card w-100">
            <div class="card-status bg-blue"></div>
            <div class="card-header">
                <h3 class="card-title">Enrégistrer un paiement</h3>
            </div>
            <div class="card-body">
                <div class="media mb-5">
                    <div class="media-body row ">
                        <div class="col-4">
                            <h6>{{ $location->description() }}</h6>
                            <h6>Loyer mensuel de {{ $location->loyer }} euros</h6>
                        </div>

                        <div class="col-4">
                            <address class="text-muted mb-1">{{ $location->property->address }} </address>
                            <address class="text-muted mb-1">
                                {{ $location->property->city .', '. $location->property->postcode }}
                            </address>
                            <address class="text-muted">
                                {{( $location->property->address2 ? $location->property->address2.', ' : ''). $location->property->country }}
                            </address>
                        </div>
                        <div class="col-4">
                            <div class="h6">Nom du locataire</div>
                            <p>{{ $location->locataire->fullName() }}</p>
                        </div>
                    </div>
                </div>
                <form class="card" method="POST" action="{{ route('paiements.store', $location->id) }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="month" class="form-label">Mois<span class="form-required">*</span> </label>
                                    <select name="month" id="month" class="form-control custom-select @error('month') is-invalid @enderror">
                                        @foreach ($getMonth as $key => $value)
                                        <option value="{{$key + 1}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="year" class="form-label">Année<span class="form-required">*</span> </label>
                                    <input type="text" class="input form-control @error('year') is-invalid @enderror" placeholder="year" id="year" name="year" value={{ now()->format('Y') }}>

                                    @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="received_at" class="form-label">Date de réception</label>
                                    <input type="date" class="input form-control @error('received_at') is-invalid @enderror" id="received_at" name="received_at">

                                    @error('received_at')
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
</div>
</div>

@endsection