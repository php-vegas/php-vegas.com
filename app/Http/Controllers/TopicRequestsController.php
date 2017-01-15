<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicRequestsController extends Controller
{
    /**
     * TopicRequestsController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {
        return view('requests');
    }

    public function insert(Request $request)
    {

    }
}
