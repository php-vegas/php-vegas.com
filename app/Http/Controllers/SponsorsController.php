<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index()
    {
        return view('sponsors');
    }
}
