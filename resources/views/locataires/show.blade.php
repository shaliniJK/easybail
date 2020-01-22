@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Locataire </h1>
    <p> Prénom : {{ $locataire-> first_name }} </p>
    <p> Nom : {{ $locataire-> last_name }} </p>
    <p> Email : {{ $locataire-> email }} </p>

    <div class="link">
        <a href=" /locataires/{{ $locataire->id}}/edit ">
            {{ __('Modifier') }}
        </a>
    </div>

</div>
@endsection