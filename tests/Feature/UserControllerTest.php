<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_user()
{
    // In this section I Prepare user data
    $userData = [
        'name' => 'John Doe',
    ];

    // I Send a POST request to create a user
    $response = $this->post('/api/users', $userData);
    $response->assertStatus(201);

    
}
}

