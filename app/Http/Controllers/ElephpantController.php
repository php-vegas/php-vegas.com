<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class ElephpantController
 *
 * @package App\Http\Controllers
 */
class ElephpantController extends Controller
{
    /**
     * Displays the contact page
     *
     * @return View
     */
    public function index(): View
    {
        return view('elephpant');
    }
}
