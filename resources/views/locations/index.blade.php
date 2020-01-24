@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Mes locations</h1>

    <div class="collection ">

        @foreach($locations as $location)
        <a href="{{ $location->path() }}" class="collection-item">
            {{ $location->date_entree }}
        </a>
        @endforeach

    </div>

</div>


@endsection