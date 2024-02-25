<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VisitApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTrackVisit()
    {
        // Generate a random external ID
        $externalId = uniqid();

        // Send a GET request to the track-visit endpoint with the generated external ID
        $response = $this->get('/api/track-visit/' . $externalId);

        // Assert that the response has a status code of 200 (successful)
        $response->assertStatus(200);
    }
}
