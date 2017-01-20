<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DMS\Service\Meetup\MeetupKeyAuthClient;

class HomeController extends Controller
{
    protected $meetupClient;

    /**
     * Create a new controller instance.
     *
     * @param MeetupKeyAuthClient $meetupKeyAuthClient
     */
    public function __construct(MeetupKeyAuthClient $meetupKeyAuthClient)
    {
        $this->meetupClient = $meetupKeyAuthClient::factory([
            'key' => getenv('MEETUP_API_KEY'),
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = $this->meetupClient->getEvents([
            'group_urlname' => 'PHP-vegas',
        ])->getData()[0];

        return view('home', [
            'event' => $event,
        ]);
    }
}
