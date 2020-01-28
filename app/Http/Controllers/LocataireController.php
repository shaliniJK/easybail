<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LocataireController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $locataires = Locataire::latest()->get();
        return view('locataires.index')->with(compact('user', 'locataires'));
    }

    // show a single ressource
    public function show(Locataire $locataire)
    {
        return view('locataires.show', ['user' => auth()->user(), 'locataire' => $locataire]);
    }


    // show a view to create a new ressource
    public function create()
    {
        return view('locataires.create', ['user' => auth()->user()]);
    }

    // persist that create form
    public function store(Request $request)
    {
        $locataire = $this->validateLocataire();
        Locataire::create($locataire);
        return redirect(route('locataires.index'))->with('success', 'Votre locataire a bien été ajouté !');
    }


    // Show a view to edit
    public function edit(Locataire $locataire)
    {
        return view('locataires.edit', [
            'user' => auth()->user(),
            'locataire' => $locataire,
        ]);
    }

    public function update(Locataire $locataire)
    {
        $locataire->update($this->validateLocataire());
        return redirect($locataire->path())->with('success', 'Votre locataire a bien été modifié !');
    }

    protected function validateLocataire()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'postalcode' => 'required',
            'city' => 'required',
            'email' => 'required',
            'nationality' => 'required',
        ]);
    }

    // delete
    public function destroy($id)
    {
        //
    }
}
