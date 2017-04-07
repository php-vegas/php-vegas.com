<?php

namespace App\Services;

use Illuminate\Support\Facades\Redis;
use DMS\Service\Meetup\MeetupKeyAuthClient;

/**
 * Class MeetupService
 *
 * @package App\Services
 */
class MeetupService
{
    /**
     * @var MeetupKeyAuthClient
     */
    protected $client;

    /**
     * @var Redis
     */
    protected $redis;

    /**
     * MeetupService constructor.
     *
     * @param MeetupKeyAuthClient $meetupKeyAuthClient
     * @param Redis $redis
     */
    public function __construct(MeetupKeyAuthClient $meetupKeyAuthClient, Redis $redis)
    {
        $this->redis  = $redis;
        $this->client = $meetupKeyAuthClient::factory([
            'key' => getenv('MEETUP_API_KEY'),
        ]);
    }

    /**
     * This returns the latest event from the meetup api.
     *
     * @return array
     */
    public function latestEvent(): array
    {
        $event = Redis::get('latest-meetup-event');

        if (is_null($event)) {
            $event = $this->latestEvents()[0];
            $event = serialize($event);

            Redis::set('latest-meetup-event', $event);
        }

        return unserialize($event);
    }

    /**
     * Returns all of the meetup events that have yet to happen
     *
     * @return array
     */
    public function latestEvents(): array
    {
        $events = Redis::get('all-meetup-events');

        if (is_null($events)) {
            $events = $this->client->getEvents([
                'group_urlname' => 'PHP-vegas',
            ])->getData();
            $events = serialize($events);

            Redis::set('all-meetup-events', $events);
        }

        return unserialize($events);
    }

    /**
     * Returns the group sponsors from the meetup api
     *
     * @return array
     */
    public function groupSponsors(): array
    {
        $sponsors = Redis::get('meetup-sponsors');

        if (is_null($sponsors)) {
            $sponsors = $this->groupDetails()['sponsors'];
            $sponsors = serialize($sponsors);

            Redis::set('meetup-sponsors', $sponsors);
        }

        return unserialize($sponsors);
    }

    /**
     * Returns the group details
     *
     *   ** Not Cached **
     *
     * @return array
     */
    public function groupDetails(): array
    {
        return $sponsors = $this->client->getGroups([
            'group_urlname' => 'PHP-vegas',
            'fields'        => 'sponsors'
        ])->getData()[0];
    }
}