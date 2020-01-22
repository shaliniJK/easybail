@extends('layouts.app')

@section('content')

<h1>Mes locataires</h1>


<form>
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

    <a href=" /locataires/create">
        Ajouter un nouveau locataire
    </a>
</form>



@endsection