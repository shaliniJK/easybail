<?php

namespace App\Http\Controllers;

use App\BailType;
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
        $locations = $user->locations;

        return view('locations.index')->with(compact('user', 'locations'));
    }

    // show a single ressource
    public function show(Location $location)
    {
        $this->checkUserAuthorization($location);

        $property = Property::find($location->property_id);
        $locataire = Locataire::find($location->locataire_id);

        return view('locations.show', ['user' => auth()->user(), 'property' => $property, 'locataire' => $locataire, 'location' => $location]);
    }

    /**
     * Show a view to create a new location.
     */
    public function create()
    {
        $user = auth()->user();

        return view('locations.create', [
            'user' => $user,
            'properties' => $user->properties,
            'locataires' => $user->locataires,
            'bail_types' => BailType::all(),
        ]);
    }

    /**
     * Creates a new location.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $location = $this->validateLocation();

        $user = $request->user();

        $user->locations()->create($location);

        return redirect(route('locations.index'))->with('success', 'Votre location a bien été crée !');
    }

    // Show a view to edit
    public function edit(Location $location)
    {
        $this->checkUserAuthorization($location);
        $user = auth()->user();

        return view('locations.edit', [
            'user' => $user,
            'location' => $location,
            'properties' => $user->properties,
            'locataires' => $user->locataires,
            'bail_types' => BailType::all(),
        ]);
    }

    public function update(Location $location)
    {
        $this->checkUserAuthorization($location);

        $updatedlocation = request()->validate([
            'bail_type_id' => 'required|exists:bail_types,id',
            'loyer' => 'required',
            'charges' => 'required',
            'preavis' => 'required',
            'date_signature_bail' => 'required|date',
            'date_entree' => 'required|date',
        ]);

        $updatedlocation['property_id'] = $location['property_id'];
        $updatedlocation['locataire_id'] = $location['locataire_id'];

        // $user = request()->user();

        // $user->locations()->update($updatedlocation, ['id' => $location->id]);
        $location->update($updatedlocation);

        return redirect(route('locations.index'))->with('success', 'Votre location a bien été modifié !');
    }

    protected function validateLocation()
    {
        return request()->validate([
            'property_id' => 'required|exists:properties,id',
            'locataire_id' => 'required|exists:locataires,id',
            'bail_type_id' => 'required|exists:bail_types,id',
            'loyer' => 'required',
            'charges' => 'required',
            'preavis' => 'required',
            'date_signature_bail' => 'required|date',
            'date_entree' => 'required|date',
        ]);
    }

    /**
     * Destroys a location.
     *
     * @param Location $location
     */
    public function destroy(Location $location)
    {
    }

    private function checkUserAuthorization(Location $location)
    {
        $user = request()->user();

        if ($location->user_id !== $user->id) {
            abort(401);
        }
    }

    public function bail(Location $location)
    {
        $this->checkUserAuthorization($location);
        $user = auth()->user();

        return view('locations.bail', [
            'user' => $user,
            'location' => $location,
            'properties' => $user->properties,
            'locataires' => $user->locataires,
            'bail_types' => BailType::all(),
        ]);
    }
}
