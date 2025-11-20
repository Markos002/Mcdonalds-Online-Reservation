<?php 

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IGuestReservationAmendService;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GuestReservationAmendService implements IGuestReservationAmendService
{

    public function __construct(
        protected IGuestRepository $guestRepository,
        protected IPartyDetailRepository $partyDetialRepository
    ){}

    public function edit($guestId)
    {
        $guestData = $this->guestRepository->findGuestReservationForEdit($guestId);
        $guestFindIfExist = $this->partyDetialRepository->findGuestReservationIfNotPending($guestId);

        abort_if(!$guestFindIfExist, 404, "Guest with ID {$guestId} not found.");

        return $guestData;
    }
}