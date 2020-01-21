@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">

        <h1>Modifier les informations du locataire</h1>
        <form method="POST" action="/locataires/{{ $locataire->id}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="first_name" class="label">Prenom</label>

                <div class="control">
                    <input id="first_name" type="text" class="input" name="first_name" value="{{ $locataire-> first_name }}">
                </div>
            </div>

            <div class="field">
                <label for="last_name" class="label">Nom</label>

                <div class="control">
                    <input id="last_name" type="text" class="input" name="last_name" value="{{ $locataire-> last_name }}">
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">E-Mail</label>

                <div class="control">
                    <input id="email" type="email" class="input" name="email" value="{{ $locataire-> email }}">
                </div>
            </div>


            <div class="field">
                <div class="control">
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>


    </div>
</div>

@endsection