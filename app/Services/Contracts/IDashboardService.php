<?php

namespace App\Services\Contracts;

interface IDashboardService
{

    public function reservationStatusOverview();

    public function salesIncomeByYear($year);

    public function monthlyReservationTrends($year);
}