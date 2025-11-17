<?php

namespace App\Services\Contracts;

interface IDashboardReportService
{

    public function reservationStatusOverview();

    public function salesIncomeByYear($year);

    public function monthlyReservationTrends($year);
}