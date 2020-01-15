@extends('layouts.app')

@section('content')

<h1>{{ __('Reset Password') }}</h1>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" class="form-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password-confirm">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

    <button type="submit" class="btn btn-primary">
        {{ __('Reset Password') }}
    </button>

    </div>
</form>

</div>
@endsection