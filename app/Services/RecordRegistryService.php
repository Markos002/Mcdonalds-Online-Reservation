<?php

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Repository\Contracts\IUserRepository;
use App\Services\Contracts\IRecordRegistryService;
use App\Traits\GetAuthId;
use Exception;
use Illuminate\Support\Facades\Auth;


class RecordRegistryService implements  IRecordRegistryService
{
    use GetAuthId;
    public function __construct(
        protected IGuestRepository $guestRepository,
        protected IPartyDetailRepository $partyDetailRepository,
        protected IUserRepository $userRepository,
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

    public function myReservationDetails($guest_id)
    {
       // $isAdmin = $this->userRepository->isAdmin($this->getAuthId());
       
       $isAdmin = Auth::user()->role === 'admin';
        
        $guest = $this->guestRepository->findByGuestId($guest_id);
        
        if(!$isAdmin){
            if ($guest->user_id !== $this->getAuthId()) {
                abort(401, 'Unauthorized access to this reservation');
            }
        }
        
        $data = $this->guestRepository->getMyReservationDetails($guest_id);
        
        if (!$data) {
            abort(404, 'Reservation details not found');
        }
        
        return $data;
    }

    public function timeExtend($data)
    {
       $user = $this->partyDetailRepository->find($data['party_dtl_id']);

        if($data['extension_note'] > 1){
            throw new Exception('Extension cannot be more than 1 hour(s).');
        }

        $user->update([
            'time_extend' => $data['extension_note']
        ]);
    }
}