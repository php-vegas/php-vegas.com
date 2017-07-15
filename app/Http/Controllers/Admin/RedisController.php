<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Cache\Repository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class RedisController
 *
 * @package App\Http\Controllers\Admin
 */
class RedisController extends Controller
{
    private $redis;

    /**
     * AdminController constructor.
     *
     * @internal param MeetupService $meetupService
     * @param Repository $redis
     */
    function __construct(Repository $redis)
    {
        $this->middleware('auth');

        $this->redis = $redis;
    }

    /**
     * Displays the administration dashboard
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function index(Request $request): RedirectResponse
    {
        $this->redis->tags('phpvegas')->flush();
        $request->session()->flash('confirmation', 'Redis Cache Cleared Successfully');

        return redirect('/admin');
    }
}
