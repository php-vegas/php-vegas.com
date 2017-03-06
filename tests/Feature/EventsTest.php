<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class EventsTest
 *
 * @package Tests\Feature
 */
class EventsTest extends TestCase
{
    /**
     * Tests the meetup events page
     *
     * @return void
     */
    public function testEventsPageOkay()
    {
        $response = $this->get('/meetup-events');

        $response->assertStatus(200);
    }

    /**
     * Tests the meetup event requests page
     *
     * @return void
     */
    public function testRequestsPageOkay()
    {
        $response = $this->get('/meetup-events/request-topic');

        $response->assertStatus(200);
    }

    /**
     * Tests the thanks page
     *
     * @return void
     */
    public function testThanksPageOkay()
    {
        $response = $this->get('/meetup-events/request-topic/thanks');

        $response->assertStatus(200);
    }
}
