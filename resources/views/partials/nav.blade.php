<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">
            easy bail
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            @guest
                <li>
                    <a href="{{ route('login') }}">Connexion</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">Inscription</a>
                </li>
                @endif
            @else
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div aria-labelledby="navbarDropdown">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        Deconnexion
                        {{ Auth::user()->first_name}}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest
        </ul>
    </div>

    @auth
    <div class="nav-content teal lighten-2">
      <ul class="tabs tabs-transparent">
        <li class="tab">
            <a href="{{ route('properties') }}">Mes Biens</a>
        </li>
        <li class="tab">
            <a class="active" href="#test2">Mes Locations</a>
        </li>
        <li class="tab">
            <a href="#test3">Mes Informations</a>
        </li>
        <li class="tab">
            <a href="#test4">Messagerie</a>
        </li>
      </ul>
    </div>
    @endauth
</nav>
