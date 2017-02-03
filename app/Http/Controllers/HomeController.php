<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\MeetupService;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @var MeetupService
     */
    protected $meetupService;

    /**
     * Create a new controller instance.
     *
     * @param MeetupService $meetupService
     */
    public function __construct(MeetupService $meetupService)
    {
        $this->meetupService = $meetupService;
    }

    /**
     * Displays the homepage of the website
     *
     * @return View
     */
    public function index(): View
    {
        $event = $this->meetupService->latestEvent();

        return view('home', [
            'event' => $event,
        ]);
    }
}
