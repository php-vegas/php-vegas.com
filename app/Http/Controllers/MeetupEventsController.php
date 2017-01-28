<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\MeetupService;

/**
 * Class MeetupEventsController
 *
 * @package App\Http\Controllers
 */
class MeetupEventsController extends Controller
{
    /**
     * @var MeetupService
     */
    protected $meetupService;

    /**
     * MeetupEventsController constructor.
     *
     * @param MeetupService $meetupService
     */
    public function __construct(MeetupService $meetupService)
    {
        $this->meetupService = $meetupService;
    }

    /**
     * This shows the events archive page.
     *
     * @return View
     */
    public function index(): View
    {
        $events = $this->meetupService->latestEvents();

        return view('events', [
            'events' => $events,
        ]);
    }
}
