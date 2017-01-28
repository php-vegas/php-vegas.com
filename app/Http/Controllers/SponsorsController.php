<?php

namespace App\Http\Controllers;

use App\Services\MeetupService;
use Illuminate\View\View;

/**
 * Class SponsorsController
 *
 * @package App\Http\Controllers
 */
class SponsorsController extends Controller
{
    /**
     * @var MeetupService
     */
    protected $meetupService;

    /**
     * SponsorsController constructor.
     *
     * @param MeetupService $meetupService
     */
    public function __construct(MeetupService $meetupService)
    {
        $this->meetupService = $meetupService;
    }

    /**
     * Displays all of the groups sponsors
     *
     * @return View
     */
    public function index(): View
    {
        $sponsors = $this->meetupService->groupSponsors();

        return view('sponsors', [
            'sponsors' => $sponsors
        ]);
    }
}
