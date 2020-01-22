<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LocataireController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    // render a list of a ressource
    public function index()
    {
        $locataires = Locataire::latest()->get();
        return view('locataires.index', ['locataires' => $locataires]);
    }

    // show a single ressource
    public function show(Locataire $locataire)
    {
        return view('locataires.show', ['locataire' => $locataire]);
    }


    // show a view to create a new ressource
    public function create()
    {
        return view('locataires.create');
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
        return view('locataires.edit', compact('locataire'));
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
            'email' => 'required',

        ]);
    }

    // delete
    public function destroy($id)
    {
        //
    }
}
