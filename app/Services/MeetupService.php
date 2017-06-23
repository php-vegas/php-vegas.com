<?php

namespace App\Services;

use DMS\Service\Meetup\MeetupKeyAuthClient;
use Illuminate\Cache\Repository;

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
     * @var Repository
     */
    protected $redis;

    /**
     * MeetupService constructor.
     *
     * @param MeetupKeyAuthClient $meetupKeyAuthClient
     * @param Repository $redis
     */
    public function __construct(MeetupKeyAuthClient $meetupKeyAuthClient, Repository $redis)
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
        $event = $this->redis->get('latest-meetup-event');

        if (is_null($event)) {
            $events = $this->latestEvents();
            $event  = current($events);
            $event  = serialize($event);

            $this->redis->put('latest-meetup-event', $event, 5);
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
        $events = $this->redis->get('all-meetup-events');

        if (is_null($events)) {
            $events = $this->client->getEvents([
                'group_urlname' => 'PHP-vegas',
            ])->getData();
            $events = serialize($events);

            $this->redis->put('all-meetup-events', $events, 5);
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
        $sponsors = $this->redis->get('meetup-sponsors');

        if (is_null($sponsors)) {
            $sponsors = $this->groupDetails()['sponsors'];
            $sponsors = serialize($sponsors);

            $this->redis->put('meetup-sponsors', $sponsors, 5);
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
        $data = $this->client->getGroups([
            'group_urlname' => 'PHP-vegas',
            'fields'        => 'sponsors'
        ])->getData();

        return current($data);
    }
}