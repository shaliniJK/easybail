@extends('layouts.app')

@section('content')

<h1>{{ __('Nouveau locataire') }}</h1>

<form method="POST" action="{{ route('locataire') }}">

    @csrf
    <label for="first_name">Prénom</label>
    <input id="first_name" type="text" class="form-input form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus>
    @error('first_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="last_name">Nom</label>
    <input id="last_name" type="text" class="form-input form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus>
    @error('last_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="email">{{ __('Addresse mail') }}</label>
    <input id="email" type="email" class="form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror




    <button type="submit">
        Enregistrer
    </button>
    </div>
    </div>
</form>
</div>

@endsection