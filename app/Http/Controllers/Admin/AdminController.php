<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class AdminController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{
    /**
     * AdminController constructor.
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dash', [

        ]);
    }
}
