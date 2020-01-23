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
                <label for="dateofbirth" class="label">Date de naissance</label>

                <div class="control">
                    <input id="dateofbirth" type="text" class="input" name="dateofbirth" value="{{ $locataire-> dateofbirth }}">
                </div>
            </div>

            <div class="field">
                <label for="address" class="label">Adresse</label>

                <div class="control">
                    <input id="address" type="text" class="input" name="address" value="{{ $locataire-> address }}">
                </div>
            </div>

            <div class="field">
                <label for="postalcode" class="label">Code Postal</label>

                <div class="control">
                    <input id="postalcode" type="text" class="input" name="postalcode" value="{{ $locataire-> postalcode }}">
                </div>
            </div>

            <div class="field">
                <label for="city" class="label">Ville</label>

                <div class="control">
                    <input id="city" type="text" class="input" name="city" value="{{ $locataire-> city }}">
                </div>
            </div>

            <div class="field">
                <label for="nationality" class="label">Nationalité</label>

                <div class="control">
                    <input id="nationality" type="text" class="input" name="nationality" value="{{ $locataire-> nationality }}">
                </div>
            </div>


            <div class="field">
                <label for="email" class="label">E-Mail</label>

                <div class="control">
                    <input id="email" type="email" class="input" name="email" value="{{ $locataire-> email }}">
                </div>
            </div>

            <div class="field">
                <label for="phonenumber" class="label">Numéro de télèphone</label>

                <div class="control">
                    <input id="phonenumber" type="phonenumber" class="input" name="phonenumber" value="{{ $locataire-> phonenumber }}">
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