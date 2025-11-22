<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IDashboardService;
use Illuminate\Http\Request;
use App\Dto\ResponseDto;
use App\Models\PartyDetail;
use Illuminate\Support\Facades\DB;


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

        $data = PartyDetail::select(responseDto::columns())
                    ->get()
                    ->map(fn($resDto) => new responseDto($resDto));
      //  dd($data);
       
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