<?php

namespace App\Services;

use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IDashboardService;

class DashboardReportService implements IDashboardService
{

    public function __construct(
         protected IPartyDetailRepository $partyDetailRepository
    ){}

    public function reservationStatusOverview()
    {
        return $this->partyDetailRepository->getReservationStatusOverView();
    }

    public function salesIncomeByYear($year)
    {
        return $this->partyDetailRepository->getSalesIncomeByYear($year);
    }

    public function monthlyReservationTrends($year)
    {
        return $this->partyDetailRepository->getMonthlyReservationTrends($year);
    }
    
}