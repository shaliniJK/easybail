<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LocataireController extends Controller
{

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
        Locataire::create($this->validateLocataire());
        return redirect(route('locataires.index'));
    }

    // Show a view to edit
    public function edit(Locataire $locataire)
    {
        return view('locataires.edit', compact('user', 'locataire'));
    }

    public function update(Locataire $locataire)
    {
        $locataire->update($this->validateLocataire());
        return redirect($locataire->path());
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
