<?php

namespace App\Http\Controllers\Admin;

use \Illuminate\Http\Request as HTTPRequest;
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
     * @param Request|HTTPRequest $request
     * @return View
     */
    public function index(HTTPRequest $request): View
    {
        $flashMessage  = $request->session()->get('confirmation', null);
        $requestCount  = Request::count();
        $topicRequests = Request::all();
        $groupDetails  = $this->meetupService->groupDetails();
        $eventDetails  = $this->meetupService->latestEvent();

        return view('admin.dash', [
            'confirmation'  => $flashMessage,
            'requestCount'  => $requestCount,
            'groupDetails'  => $groupDetails,
            'eventDetails'  => $eventDetails,
            'topicRequests' => $topicRequests,
        ]);
    }
}
