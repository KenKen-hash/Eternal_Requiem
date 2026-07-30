<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use App\Models\BurialRecord;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistics
        $totalPlots = Plot::count();

        $occupiedPlots = Plot::where('status', 'occupied')->count();

        $availablePlots = Plot::where('status', 'available')->count();

        $monthlyBurials = BurialRecord::whereMonth('burial_date', Carbon::now()->month)
            ->whereYear('burial_date', Carbon::now()->year)
            ->count();

        // Recent Burials
        $recentBurials = BurialRecord::with('plot')
            ->latest('burial_date')
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalPlots',
            'occupiedPlots',
            'availablePlots',
            'monthlyBurials',
            'recentBurials'
        ));
    }
}