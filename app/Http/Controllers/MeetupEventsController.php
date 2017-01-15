<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use DMS\Service\Meetup\MeetupKeyAuthClient;

class MeetupEventsController extends Controller
{
    /**
     * @var Redis
     */
    protected $redisClient;

    /**
     * @var MeetupKeyAuthClient
     */
    protected $meetupClient;

    /**
     * MeetupEventsController constructor.
     *
     * @param Redis $redis
     * @param MeetupKeyAuthClient $meetupKeyAuthClient
     */
    public function __construct(Redis $redis, MeetupKeyAuthClient $meetupKeyAuthClient)
    {
        $this->redisClient  = $redis;
        $this->meetupClient = $meetupKeyAuthClient::factory([
            'key' => getenv('MEETUP_API_KEY'),
        ]);
    }

    /**
     * This is the index function for the meetup event archive. It makes
     * an API call to the meetup API and then passes those dates with
     * there data to the view for display to the user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $events = $this->meetupClient->getEvents([
            'group_urlname' => 'PHP-vegas',
        ])->getData();

        return view('events', [
            'events' => $events,
        ]);
    }
}
