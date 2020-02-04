<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Paiement;
use App\Notifications\PaymentReminder;

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

    public function show(Paiement $paiement)
    {
        $location = Location::find($paiement->location_id);

        return view('paiements.show', ['user' => auth()->user(), 'paiement' => $paiement, 'location' => $location]);
    }

    /**
     * Show a view to create the paiement associated with the given location.
     *
     * @param Location $location
     */
    public function create(Location $location)
    {
        $getMonth = [];
        foreach (range(1, 12) as $m) {
            $getMonth[] = date('m - F', mktime(0, 0, 0, $m, 1));
        }

        return view('paiements.create', [
            'user' => auth()->user(),
            'location' => $location,
            'getMonth' => $getMonth,
        ]);
    }

    /**
     * Creates a new paiement.
     *
     * @param Location $location
     */
    public function store(Location $location)
    {
        $user = request()->user();

        if ($location->user_id !== $user->id) {
            abort(401);
        }

        $paiement = request()->validate([
            'month' => 'required',
            'year' => 'required',
            'received_at' => 'nullable|date',
        ]);

        $paiement['user_id'] = $user->id;
        $paiement['location_id'] = $location->id;
        $paiement['reception'] = true;

        $user->paiements()->create($paiement);

        return redirect(route('paiements.index'));
    }

    public function createEcheance(Location $location)
    {
        $getMonth = [];
        foreach (range(1, 12) as $m) {
            $getMonth[] = date('m - F', mktime(0, 0, 0, $m, 1));
        }

        return view('paiements.createEcheance', [
            'user' => auth()->user(),
            'location' => $location,
            'getMonth' => $getMonth,
        ]);
    }

    public function sendEcheance(Location $location)
    {
        $user = request()->user();

        if ($location->user_id !== $user->id) {
            abort(401);
        }

        $locataire = $location->locataire;

        $paiement = request()->validate([
            'month' => 'required',
            'year' => 'required',
        ]);

        $locataire->notify(new PaymentReminder("{$paiement['month']}-{$paiement['year']}", "€ {$location->loyer}", $user->fullName()));

        return redirect('locations')->with('success', "Votre avis d'écheance a bien été envoyé !");
    }

    // delete
    public function destroy($id)
    {
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
