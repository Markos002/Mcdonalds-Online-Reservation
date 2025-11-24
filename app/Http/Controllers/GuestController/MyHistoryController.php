<?php

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IRecordRegistryService;

class MyHistoryController extends Controller
{

    public function __construct(
        protected IRecordRegistryService $recordRegistryService
    ){}

    public function index()
    {
        $myHistory = $this->recordRegistryService->myReservationHistory();

    }

}