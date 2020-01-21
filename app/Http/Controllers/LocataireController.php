<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LocataireController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index()
    {
        return view('locataire');
    }*/

    /*public function index()
    {
        $locataires = DB::table('locataires')->get();

        return view('locataire.index', ['locataires' => $locataires]);
    }*/

    // render a list of a ressource
    public function index()
    {
        $locataires = Locataire::latest()->get();
        return view('locataires.index', ['locataires' => $locataires]);
    }

    // show a single ressource
    public function show($id)
    {
        $locataire = Locataire::find($id);
        return view('locataires.show', ['locataire' => $locataire]);
    }


    // show a view to create a new ressource
    public function create()
    {
        return view('locataires.create');
    }

    // persist that create form
    public function store(Request $request)
    {

        $locataire = new Locataire();
        $locataire->first_name = request('first_name');
        $locataire->last_name = request('last_name');
        $locataire->email = request('email');
        $locataire->save();

        return redirect('/locataires');
    }

    // Show a view to edit
    public function edit($id)
    {
        $locataire = Locataire::find($id);
        return view('locataires.edit', compact('locataire'));
    }

    public function update(Request $request, $id)
    {
        $locataire = Locataire::find($id);
        $locataire->first_name = request('first_name');
        $locataire->last_name = request('last_name');
        $locataire->email = request('email');
        $locataire->save();
        return redirect('/locataires/' . $locataire->id);
    }

    // delete
    public function destroy($id)
    {
        //
    }
}
