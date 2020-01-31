<?php

namespace App\Http\Controllers;

use App\Location;
use App\Locataire;
use App\Property;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $properties = $user->properties;
        $locations = Location::latest()->get();
        $locataires = Locataire::latest()->get();

        return view('locations.index')->with(compact('user', 'properties', 'locataires', 'locations'));
    }

    // show a single ressource
    public function show(Location $location)
    {
        $property = Property::find($location->property_id);
        $locataire = Locataire::find($location->locataire_id);

        return view('locations.show', ['user' => auth()->user(), 'property' => $property, 'locataire' => $locataire, 'location' => $location]);
    }

    // show a view to create a new ressource
    public function create()
    {
        return view('locations.create', ['user' => auth()->user()]);
    }

    // persist that create form
    public function store(Request $request)
    {
        $location = $this->validateLocation();
        Location::create($location);

        return redirect(route('locations.index'))->with('success', 'Votre location a bien été ajouté !');
    }

    // Show a view to edit
    public function edit(Location $location)
    {
        return view('locations.edit', [
            'user' => auth()->user(),
            'location' => $location,
        ]);
    }

    public function update(Location $location)
    {
        $location->update($this->validateLocation());

        return redirect($location->path());
    }

    protected function validateLocation()
    {
        return request()->validate([
            'loyer' => 'required',
            'charges' => 'required',
            'preavis' => 'required',
            'nb_locataire' => 'required',
            'date_signature_bail' => 'required',
            'date_entree' => 'required',
        ]);
    }

    // delete
    public function destroy($id)
    {
    }
}
