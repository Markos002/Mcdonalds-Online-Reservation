<?php

namespace App\Services;

use App\Repository\Contracts\IFoodPackageRepository;
use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IReservationService;
use Illuminate\Support\Facades\DB;

class ReservationService implements IReservationService
{

    public function __construct(
        protected IPartyDetailRepository $partyDetailRepository,
        protected IGuestRepository       $guestRepository,
        protected IFoodPackageRepository $foodPackageRepository
    ){}

    public function store(array $data)
    {
        
        
    }
}