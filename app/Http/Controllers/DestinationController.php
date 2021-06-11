<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    // LISTA VIAGGI

    public function index() {
        return view('destinations');
    }
}
