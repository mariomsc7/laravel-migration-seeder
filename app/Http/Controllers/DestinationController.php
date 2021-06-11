<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinationController extends Controller
{
    // LISTA VIAGGI

    public function index() {

        //get all destinations
        $destinations = Destination::all();
        
        return view('destinations', compact('destinations'));
    }
}
