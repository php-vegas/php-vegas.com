<?php

namespace App\Http\Controllers;

use DMS\Service\Meetup\MeetupKeyAuthClient;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    protected $meetupClient;

    public function __construct(MeetupKeyAuthClient $meetupKeyAuthClient)
    {
        $this->meetupClient = $meetupKeyAuthClient::factory([
            'key' => getenv('MEETUP_API_KEY'),
        ]);
    }

    public function index()
    {
        $sponsors = $this->meetupClient->getGroups([
            'group_urlname' => 'PHP-vegas',
            'fields'  => 'sponsors'
        ])->getData()[0]['sponsors'];

        return view('sponsors', [
            'sponsors' => $sponsors
        ]);
    }
}
