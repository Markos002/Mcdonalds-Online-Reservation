<?php

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IRecordRegistryService;
use App\Traits\GetAuthId;

class RecordRegistryService implements  IRecordRegistryService
{
    use GetAuthId;
    public function __construct(
        protected IGuestRepository $guestRepository,
        protected IPartyDetailRepository $partyDetailRepository,
    ){}

    public function reservationHitory()
    {
       return $this->partyDetailRepository->getReservationRecordHistory();
    }

    public function myReservationHistory()
    {
        $Id = $this->getAuthId();

        return $this->guestRepository->getMyReservationHistory($Id);
    }
}