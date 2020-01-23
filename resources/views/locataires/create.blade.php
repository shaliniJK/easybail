@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">

        <h1>Créer un Locataire</h1>
        <form method="POST" action="/locataires">
            @csrf
            <div class="field">
                <label for="first_name" class="label">Prenom</label>

                <div class="control">
                    <input id="first_name" class="input @error('first_name') danger @enderror" type="text" name="first_name" value="{{ old('first_name')}}">
                    @error('first_name')
                    <p class="danger">{{$errors->first('first_name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="last_name" class="label">Nom</label>

                <div class="control">
                    <input id="last_name" class="input @error('last_name') danger @enderror" type="text" name="last_name" value="{{ old('last_name')}}">
                    @error('last_name')
                    <p class="danger">{{$errors->first('last_name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">E-Mail</label>

                <div class="control">
                    <input id="email" class="input @error('email') danger @enderror" type="email" name="email" value="{{ old('email')}}">
                    @error('email')
                    <p class="danger">{{$errors->first('email')}}</p>
                    @enderror
                </div>
            </div>



            <div class="field">
                <label for="address" class="label">Adresse</label>

                <div class="control">
                    <input id="address" class="input @error('address') danger @enderror" type="text" name="address" value="{{ old('address') }}">
                    @error('address')
                    <p class="danger">{{$errors->first('address')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="postalcode" class="label">Code Postal</label>

                <div class="control">
                    <input id="postalcode" class="input @error('postalcode') danger @enderror" type="text" name="postalcode" value="{{ old('postalcode') }}">
                    @error('postalcode')
                    <p class="danger">{{$errors->first('postalcode')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="city" class="label">Ville</label>

                <div class="control">
                    <input id="city" class="input @error('city') danger @enderror" type="text" name="city" value="{{ old('city') }}">
                    @error('city')
                    <p class="danger">{{$errors->first('city')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="nationality" class="label">Nationalité</label>

                <div class="control">
                    <input id="nationality" class="input @error('nationality') danger @enderror" type="text" name="nationality" value="{{ old('nationality') }}">
                    @error('nationality')
                    <p class="danger">{{$errors->first('nationality')}}</p>
                    @enderror
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