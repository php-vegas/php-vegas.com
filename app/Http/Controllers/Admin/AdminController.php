<?php

namespace App\Http\Controllers\Admin;

use App\Request;
use App\Http\Controllers\Controller;
use App\Services\MeetupService;
use Illuminate\View\View;

/**
 * Class AdminController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{
    /**
     * @var MeetupService
     */
    private $meetupService;

    /**
     * AdminController constructor.
     *
     * @param MeetupService $meetupService
     */
    function __construct(MeetupService $meetupService)
    {
        $this->middleware('auth');

        $this->meetupService = $meetupService;
    }

    /**
     * Displays the administration dashboard
     *
     * @return View
     */
    public function index(): View
    {
        $requestCount = Request::count();
        $groupDetails = $this->meetupService->groupDetails();
        $eventDetails = $this->meetupService->latestEvent();

        return view('admin.dash', [
            'requestCount' => $requestCount,
            'groupDetails' => $groupDetails,
            'eventDetails' => $eventDetails,
        ]);
    }
}
