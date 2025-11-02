<?php 

namespace App\Services\Contracts;

interface ITimeSlotAvailability
{

    public function timeSlotAvailable(string $date): array;
}