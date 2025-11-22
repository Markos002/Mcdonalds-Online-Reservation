<?php

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IRecordRegistryService;

class RecordRegistryService implements  IRecordRegistryService
{

    public function __construct(
        protected IGuestRepository $guestRepository,
        protected IPartyDetailRepository $partyDetailRepository,
    ){}

    public function reservationHitory()
    {
       return $this->partyDetailRepository->getReservationRecordHistory();
    }
}