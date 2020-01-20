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
        $properties = auth()->user()->properties;

        return view('properties.index')->with(compact('properties'));
    }

    /**
     * Display the details of the specified property.
     *
     * @param Property $property
     */
    public function show(Property $property)
    {
        return view('properties.show', [
            'property' => $property,
        ]);
    }

    /**
     * Returns the view containing the form to create a new property.
     */
    public function create()
    {
        return view('properties.create');
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
