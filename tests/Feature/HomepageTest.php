<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class HomepageTest
 *
 * @package Tests\Feature
 */
class HomepageTest extends TestCase
{
    /**
     * Tests the homepage
     *
     * @return void
     */
    public function testHomepageOkay()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}