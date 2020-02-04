<?php

use App\Location;
use App\Locataire;
use App\Property;

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $properties = $user->properties;
        $locataires = $user->locataires;
        $locations = $user->locations;
        $paiements = $user->paiements;

        return view('home')->with(compact('user', 'properties', 'locataires', 'locations', 'paiements'));
    }
}
