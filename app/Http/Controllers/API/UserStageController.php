<?php

namespace App\Http\Controllers\API;

use App\Models\UserStage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserStageController extends Controller
{
    public function updateStage(Request $request)
    {
        // Validate the request payload
        $request->validate([
            'externalId' => 'required|string',
            'stage' => 'required|string',
        ]);

        // Update the stage of interaction for the given external ID
        UserStage::updateOrCreate(
            ['external_id' => $request->externalId],
            ['stage' => $request->stage]
        );

        return response()->json([], 200);
    }
}
