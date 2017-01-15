<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetupEventsController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('events');
    }
}
