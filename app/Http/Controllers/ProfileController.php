<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        return view('profile.index')->with(compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();

        return view('profile.edit')->with(compact('user'));
    }
}
