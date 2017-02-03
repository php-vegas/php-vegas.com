<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class ContactController
 *
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * Displays the contact page
     *
     * @return View
     */
    public function index(): View
    {
        return view('contact');
    }
}
