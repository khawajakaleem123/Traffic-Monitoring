<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateStageApiTest extends TestCase
{
    public function testUpdateStage()
    {
        $externalId = 'test_external_id';
        $stage = 'visited';

        // Make a POST request to the update-stage endpoint with payload
        $response = $this->post('/api/update-stage', [
            'externalId' => $externalId,
            'stage' => $stage,
        ]);

        // Assert response status code is 200
        $response->assertStatus(200);

        // Assert that a user stage with the specified external ID and stage exists in the database
        $this->assertDatabaseHas('user_stages', ['external_id' => $externalId, 'stage' => $stage]);
    }
}
