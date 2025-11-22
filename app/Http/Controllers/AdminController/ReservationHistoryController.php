<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IRecordRegistryService;

class ReservationHistoryController extends Controller
{

    public function __construct(
        protected IRecordRegistryService $recordRegistryService
    ){}

    public function index()
    {
        $reservationHistory = $this->recordRegistryService->reservationHitory();
        //dd($reservationHistory);
        return view('pages.admin.history',compact(
            'reservationHistory'
        ));
    }
}