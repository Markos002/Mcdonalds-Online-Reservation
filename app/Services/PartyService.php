<?php 

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Services\Contracts\IPartyService;

class PartyService implements IPartyService
{

    public function __construct(
        protected IGuestRepository $guestRepository
    ){}

    public function show()
    {
        return $this->guestRepository->getOnGoingParties();
    }
}