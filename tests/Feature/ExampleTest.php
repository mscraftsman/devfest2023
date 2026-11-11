<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_agenda_speakers_and_location_pages_load(): void
    {
        $this->get('/agenda')->assertStatus(200);
        $this->get('/speakers')->assertStatus(200);
        $this->get('/location')->assertStatus(200);
        $this->get('/speaker/unknown-id')->assertStatus(404);
    }
}
