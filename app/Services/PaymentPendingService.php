<?php

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IPaymentPendingService;
use Exception;

class PaymentPendingService implements IPaymentPendingService
{

    public function __construct(
        protected IGuestRepository $guestRepository,
        protected IPartyDetailRepository $partyDetailRepository
    ){}

    public function show()
    {
        return $this->guestRepository->getPendingPayments();
    }

    public function update($id, $action)
    {
       $find = $this->partyDetailRepository->findByGuestId($id);

        if(!$find){
            throw new Exception("No ID found {$id}.");
        }
        
        if($action === 'accept'){
            $find->update([
              'party_status'   => 'ongoing',
              'payment_status' => 'paid'
            ]);

            return 'Payment successful! Thank you!';
        }
        else{
            $find->update([
              'party_status'   => 'cancelled',
              'payment_status' => 'unpaid'
            ]);

            return 'The transaction has been cancelled.';
        }
    }
    
}