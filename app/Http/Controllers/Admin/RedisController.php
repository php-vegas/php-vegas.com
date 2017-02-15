<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

/**
 * Class RedisController
 *
 * @package App\Http\Controllers\Admin
 */
class RedisController extends Controller
{
    /**
     * AdminController constructor.
     *
     * @internal param MeetupService $meetupService
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays the administration dashboard
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function index(Request $request): RedirectResponse
    {
        Redis::flushall();
        $request->session()->flash('confirmation', 'Redis Cache Cleared Successfully');

        return redirect('/admin');
    }
}
