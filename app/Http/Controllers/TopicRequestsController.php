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

    /**
     * Returns the view for the request form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('requests');
    }

    public function insert(Request $request)
    {

    }
}
