@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">

        <h1>Créer une Location</h1>
        <form method="POST" action="/locations">
            @csrf
            <div class="field">
                <label for="date_signature_bail" class="label">Signature bail</label>

                <div class="control">
                    <input id="date_signature_bail" class="input @error('date_signature_bail') danger @enderror" type="text" name="date_signature_bail" value="{{ old('date_signature_bail')}}">
                    @error('date_signature_bail')
                    <p class="danger">{{$errors->first('date_signature_bail')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="date_entree" class="label">Entree</label>

                <div class="control">
                    <input id="date_entree" class="input @error('date_entree') danger @enderror" type="text" name="date_entree" value="{{ old('date_entree')}}">
                    @error('date_entree')
                    <p class="danger">{{$errors->first('date_entree')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="duree" class="label">Duree de location</label>

                <div class="control">
                    <input id="duree" class="input @error('duree') danger @enderror" type="duree" name="duree" value="{{ old('duree')}}">
                    @error('duree')
                    <p class="danger">{{$errors->first('duree')}}</p>
                    @enderror
                </div>
            </div>



            <div class="field">
                <label for="loyer" class="label">loyer</label>

                <div class="control">
                    <input id="loyer" class="input @error('loyer') danger @enderror" type="text" name="loyer" value="{{ old('loyer') }}">
                    @error('loyer')
                    <p class="danger">{{$errors->first('loyer')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="charges" class="label">charges</label>

                <div class="control">
                    <input id="charges" class="input @error('charges') danger @enderror" type="text" name="charges" value="{{ old('charges') }}">
                    @error('charges')
                    <p class="danger">{{$errors->first('charges')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="delai_preavis" class="label">delai preavis</label>

                <div class="control">
                    <input id="delai_preavis" class="input @error('delai_preavis') danger @enderror" type="text" name="delai_preavis" value="{{ old('delai_preavis') }}">
                    @error('delai_preavis')
                    <p class="danger">{{$errors->first('delai_preavis')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="depot_garantit" class="label">depot_garantit</label>

                <div class="control">
                    <input id="depot_garantit" class="input @error('depot_garantit') danger @enderror" type="text" name="depot_garantit" value="{{ old('depot_garantit') }}">
                    @error('depot_garantit')
                    <p class="danger">{{$errors->first('depot_garantit')}}</p>
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