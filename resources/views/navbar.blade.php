@extends('layouts.app')

@section('navbar')
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">easy bail</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            @guest
            <li><a href="{{ route('login') }}">{{ __('Connexion') }}</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}">{{ __('Inscription') }}</a></li>
            @endif
            @else
            <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Deconexion') }}
                    {{ Auth::user()->first_name}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            @endguest
        </ul>
    </div>
</nav>
@endsection