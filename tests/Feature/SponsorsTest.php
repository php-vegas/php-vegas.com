<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class SponsorsTest
 *
 * @package Tests\Feature
 */
class SponsorsTest extends TestCase
{
    /**
     * Tests the sponsors page
     *
     * @return void
     */
    public function testSponsorsPageOkay()
    {
        $response = $this->get('/our-sponsors');

        $response->assertStatus(200);
    }
}
