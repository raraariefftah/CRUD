<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('data.form');
    }

    public function login(Request $request)
    {
        $first = $request->first;
        $last = $request->last;

        //dd($name, $password);
        return view('data.index', compact('first', 'last'));
    }
}
