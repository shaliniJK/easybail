<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List all properties for the currently authenticated user.
     */
    public function index()
    {
        $user = auth()->user();
        $properties = $user->properties;

        return view('properties.index')->with(compact('user', 'properties'));
    }

    /**
     * Display the details of the specified property.
     *
     * @param Property $property
     */
    public function show(Property $property)
    {
        return view('properties.show', [
            'user' => auth()->user(),
            'property' => $property,
        ]);
    }

    /**
     * Returns the view containing the form to create a new property.
     */
    public function create()
    {
        return view('properties.create', [
            'user' => auth()->user(),
            'types' => PropertyType::all(),
        ]);
    }

    /**
     * Creates a new property.
     */
    public function store(Request $request)
    {
        $property = $this->validateProperty();

        $user = $request->user();

        $user->properties()->create($property);

        return redirect(route('properties'))->with('success', 'Votre bien a été ajouté !');
    }

    /**
     * Returns the view containing the form to edit an existing property.
     *
     * @param Property $property
     */
    public function edit(Property $property)
    {
        return view('properties.edit', [
            'user' => auth()->user(),
            'property' => $property,
            'types' => PropertyType::all(),
        ]);
    }

    /**
     * Updates the given property.
     *
     * @param Property $property
     */
    public function update(Property $property)
    {
        $property->update($this->validateProperty());

        return redirect(route('property', $property->id))->with('success', 'Votre bien a été modifié !');
    }

    /**
     * Destroys the given property.
     *
     * @param Property $property
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return redirect(route('properties'))->with('warning', 'Votre bien a été supprimé !');
    }

    protected function validateProperty()
    {
        return request()->validate([
            'name' => 'string|nullable',
            'address' => 'string|required',
            'address2' => 'string|nullable',
            'city' => 'string|required',
            'postcode' => ['integer', 'digits:5', 'required'],
            'country' => 'string|required',
            'nb_rooms' => ['integer', 'min:0', 'required'],
            'size' => 'integer|nullable',
            'furnished' => 'boolean|required',
            'property_type_id' => 'required|exists:property_types,id',
        ]);
    }
}
