<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    //use RefreshDatabase;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function ci()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}
