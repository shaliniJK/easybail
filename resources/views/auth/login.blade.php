@extends('layouts.auth')

@section('main')
<div class="page-single">
    <div class="container">
        <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    logo easy bail
                </div>
                <form class="card" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title">Login</div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mot de passe</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    <small class="mt-2 d-block font-weight-semi-bold">Mot de passe oublié ?</small>
                                </a>
                            @endif
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted">
                    Pas de compte ? <a href="/register">Enregistrer vous</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
