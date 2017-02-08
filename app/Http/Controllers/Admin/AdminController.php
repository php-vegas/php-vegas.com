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
    }

    public function index()
    {
        return view('admin.dash', [

        ]);
    }
}
