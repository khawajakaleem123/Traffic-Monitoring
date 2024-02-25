<?php

namespace App\Http\Controllers\API;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitController extends Controller
{
    public function trackVisit($externalId)
    {
        // Log a visit for the unique external ID
        Visit::firstOrCreate(['external_id' => $externalId]);
        return response()->json([], 200);
    }
}
