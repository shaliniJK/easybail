@extends('layouts.app')

@section('content')

<h1>Mes locataires</h1>
<div id="wrapper">
    <div id="page" class="container">


        @foreach($locataires as $locataire)
        <div class="content">
            <div class="first_name">

                <p>
                    <a href="{{  $locataire->path() }}">
                        {{ $locataire->first_name }}
                        {{ $locataire->last_name }}
                    </a>
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection