<?php 

namespace App\Traits;

use Carbon\Carbon;

trait GenerateReservationId
{

    public function generateReservationId()
    {
        $currentYear = carbon::now()->format('Y');  // eg: 2025 Year
        $monthDay    = Carbon::now()->format('md'); // eg: 1031 Month/Day
        $timeNow     = Carbon::now()->format('hi'); // eg: 0946 Hour/Min

        return 'MCDO-' . $currentYear . '-' . $monthDay . '-' . $timeNow;
    }
}