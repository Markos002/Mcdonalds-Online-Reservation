<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IDashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(
        protected IDashboardService $dashboardService
    ){}


    public function index(Request $request)
    {
        $year = $request->year ?? now()->year;
        $yearAvailable = range(2025, now()->year);
        $selectedYear  = (string)$year;

        $reservationOverview = $this->dashboardService->reservationStatusOverview();
        $salesIncome         = $this->dashboardService->salesIncomeByYear($year);
        $reservationTrends   = $this->dashboardService->monthlyReservationTrends($year);
        //dd($salesIncome);
        return view('pages.admin.dashboard',compact(
            'reservationOverview',
            'salesIncome',
            'reservationTrends',
            'yearAvailable',    
            'selectedYear'
        ));

    }
}