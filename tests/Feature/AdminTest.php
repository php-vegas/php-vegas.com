<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class AdminTest
 *
 * @package Tests\Feature
 */
class AdminTest extends TestCase
{
    /**
     * Test the login
     *
     * @return void
     */
    public function testLoginPageOkay()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
