<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

/**
 * Class PastTalksController
 *
 * @package App\Http\Controllers\Admin
 */
class PastTalksController extends Controller
{
    /**
     * PastTalksController constructor.
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays the administration dashboard
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.talks');
    }
}
