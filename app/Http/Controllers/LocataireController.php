<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;


class LocataireController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
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
        return view('locataire');
    }


    /**
     * List all locataires for the currently authenticated user.
     */
    /*public function index()
    {
        $locataires = auth()->user()->locataires;
        return view('locataires.index')->with(compact('locataires'));
    }*/

    /**
     * Display the details of the specified property.
     */
    public function show(Locataire $locataire)
    {
        return view('locataires.show', [
            'locataire' => $locataire,
        ]);
    }

    /**
     * Returns the view containing the form to create a new property.
     */
    public function create()
    {
        return view('locataires.create');
    }

    /**
     * Creates a new property.
     */
    public function store(Request $request)
    {
    }
}
