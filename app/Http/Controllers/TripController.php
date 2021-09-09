<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index(){
        $trips = Trip::paginate(5);
        return view('home', compact('trips'));
    }

    public function show($key) {
        $trips = Trip::where('id', $key)->first();
        return view('dettaglio', compact('trip'));
    }
}

