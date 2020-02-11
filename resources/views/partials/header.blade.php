<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand text-blue" href="/">
            <img src="{{ asset('images/easy.png') }}" class="header-brand-img" alt="EasyBail logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar avatar-blue">{{ $user->initials() }}</span>
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">{{ $user->fullName() }}</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="dropdown-icon fe fe-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fe fe-log-out"></i> Déconnexion
                        </a>
                    </div>
                </div>
                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item dropdown">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"><i class="fe fe-home"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('properties') }}" class="nav-link {{ request()->routeIs('properties*') ? 'active' : '' }}"><i class="fe fe-box"></i> Mes Biens</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('locataires.index') }}" class="nav-link {{ request()->routeIs('locataires*') ? 'active' : '' }}"><i class="fe fe-file-text"></i> Mes Locataires</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('locations.index') }}" class="nav-link {{ request()->routeIs('locations*') ? 'active' : '' }}"><i class="fe fe-message-circle"></i> Mes Locations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('paiements.index') }}" class="nav-link {{ request()->routeIs('paiements*') ? 'active' : '' }}"><i class="fe fe-dollar-sign"></i> Mes Paiements</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>