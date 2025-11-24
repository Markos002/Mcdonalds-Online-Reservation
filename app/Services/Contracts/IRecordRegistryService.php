<?php

namespace App\Services\Contracts;

interface IRecordRegistryService
{

    public function reservationHitory();

    public function myReservationHistory();

    public function myReservationDetails($guest_id);
}