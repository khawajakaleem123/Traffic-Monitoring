<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Visit;
use App\Models\UserStage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVisitors = Visit::count();
        
        $totalVisitorEachStage = UserStage::select('stage', DB::raw('count(*) as total'))
            ->groupBy('stage')->get();

        return view('dashboard', compact('totalVisitors', 'totalVisitorEachStage'));
    }
}
