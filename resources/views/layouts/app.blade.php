<!doctype html>
<html lang="fr">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.alerts')
    <div class="app">
        @include('partials.nav')
        <main class="py-4">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
    @yield('scripts')
</body>
</html>