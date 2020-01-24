<?php

namespace App\Http\Controllers;

use App\Property;
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
        ]);
    }

    /**
     * Creates a new property.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
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
        ]);
    }

    /**
     * Updates the given property.
     *
     * @param Property $property
     */
    public function update(Property $property)
    {
    }

    /**
     * Destroys the given property.
     *
     * @param Property $property
     */
    public function destroy(Property $property)
    {
    }
}
