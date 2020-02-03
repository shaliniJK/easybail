<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Locataire;
use App\Paiement;

class PaiementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $locations = $user->locations;
        $paiements = $user->paiements;
        $properties = $user->properties;
        return view('paiements.index')->with(compact('user', 'properties', 'locations', 'paiements'));
    }

    // show a single ressource
    public function show(Paiement $paiement)
    {
        $location = Location::find($paiement->location_id);
        return view('paiements.show', ['user' => auth()->user(), 'paiement' => $paiement, 'location' => $location]);
    }


    // show a view to create a new ressource
    public function create()
    {
        return view('paiements.create', ['user' => auth()->user()]);
    }

    // persist that create form
    public function store(Request $request)
    {
        $paiement = $this->validatePaiement();
        Paiement::create($paiement);
        return redirect(route('paiements.index'));
    }


    // Show a view to edit
    public function edit(Paiement $paiement)
    {
        return view('paiements.edit', [
            'user' => auth()->user(),
            'paiement' => $paiement,
        ]);
    }

    public function update(Paiement $paiement)
    {
        $paiement->update($this->validatePaiement());
        return redirect($paiement->path());
    }

    protected function validatePaiement()
    {
        return request()->validate([
            'location_id' => 'required',
            'mois' => 'required',
            'reception' => 'required',
        ]);
    }

    // delete
    public function destroy($id)
    {
        //
    }

    public function showQuittance(Paiement $paiement)
    {
        $location = Location::find($paiement->location_id);
        return view('paiements.quittance', [
            'user' => auth()->user(),
            'paiement' => $paiement,
            'location' => $location,
        ]);
    }
}
