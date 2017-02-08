<?php

namespace App\Http\Controllers\Admin;

use App\Request;
use App\Http\Controllers\Controller;
use App\Services\MeetupService;

/**
 * Class AdminController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{
    private $meetupService;

    /**
     * AdminController constructor.
     */
    function __construct(MeetupService $meetupService)
    {
        $this->middleware('auth');

        $this->meetupService = $meetupService;
    }

    public function index()
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
