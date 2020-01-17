<?php

namespace App\Http\Controllers;

use App\Property;

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
     * Show the details of one property.
     *
     * @param Property $property
     */
    public function show(Property $property)
    {
        dd($property);

        return view('properties.show', [
            'property' => $property,
        ]);
    }
}
