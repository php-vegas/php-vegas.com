<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ContactTest
 *
 * @package Tests\Feature
 */
class ContactTest extends TestCase
{
    /**
     * Tests the contact page
     *
     * @return void
     */
    public function testSponsorsPageOkay()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
