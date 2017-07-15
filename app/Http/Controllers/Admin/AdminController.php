<?php

namespace App\Http\Controllers\Admin;

use \Illuminate\Http\Request;
use App\Request as TopicRequest;
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
     * @var TopicRequest
     */
    private $topicRequest;

    /**
     * AdminController constructor.
     *
     * @param MeetupService $meetupService
     * @param TopicRequest $topicRequest
     */
    function __construct(
        MeetupService $meetupService,
        TopicRequest $topicRequest
    ) {
        $this->middleware('auth');

        $this->meetupService = $meetupService;
        $this->topicRequest = $topicRequest;
    }

    /**
     * Displays the administration dashboard
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $flashMessage  = $request->session()->get('confirmation', null);
        $topicRequests = $this->topicRequest->all();
        $requestCount  = $topicRequests->count();
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
