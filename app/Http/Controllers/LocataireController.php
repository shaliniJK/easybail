<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use App\Property;

class LocataireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $locataires = $user->locataires;

        $locations = $locataires->map(function ($locataire) { return $locataire->location; })->flatten();

        $property = new Property();

        return view('locataires.index')->with(compact('user', 'property', 'locataires'));
    }

    // show a single ressource
    public function show(Locataire $locataire)
    {
        $this->checkUserAuthorization($locataire);

        return view('locataires.show', ['user' => request()->user(), 'locataire' => $locataire]);
    }

    // show a view to create a new ressource
    public function create()
    {
        return view('locataires.create', ['user' => auth()->user()]);
    }

    /**
     * Store the locataire.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $locataire = $this->validateLocataire();

        $user = $request->user();

        $user->locataires()->create($locataire);

        return redirect(route('locataires.index'))->with('success', 'Votre locataire a bien été ajouté !');
    }

    /**
     * Show a view to edit the locataire.
     *
     * @param Locataire $locataire
     */
    public function edit(Locataire $locataire)
    {
        return view('locataires.edit', [
            'user' => auth()->user(),
            'locataire' => $locataire,
        ]);
    }

    public function update(Locataire $locataire)
    {
        $this->checkUserAuthorization($locataire);

        $locataire->update($this->validateLocataire());

        return redirect($locataire->path())->with('success', 'Votre locataire a bien été modifié !');
    }

    /**
     * Validates the request to get the locataire attributes.
     */
    protected function validateLocataire()
    {
        return request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'postalcode' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email|string',
            'birth_date' => 'required|date',
            'place_of_birth' => 'required|string',
            'nationality' => 'required|string',
            'phone_number' => 'required',
            'idcard_number' => 'required',
        ]);
    }

    /**
     * Deletes a locataire.
     *
     * @param Locataire $locataire
     */
    public function destroy(Locataire $locataire)
    {
        $this->checkUserAuthorization($locataire);

        $locataire->delete();

        return redirect(route('locataires.index'))->with('warning', 'Votre locataire a été supprimé !');
    }

    private function checkUserAuthorization(Locataire $locataire)
    {
        $user = request()->user();

        if ($locataire->user_id !== $user->id) {
            abort(401);
        }
    }
}
