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

    public function __construct(Redis $redis, MeetupKeyAuthClient $meetupKeyAuthClient)
    {
        $this->redisClient  = $redis;
        $this->meetupClient = $meetupKeyAuthClient::factory([
            'key' => getenv('MEETUP_API_KEY'),
        ]);
    }

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
