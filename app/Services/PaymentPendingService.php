<?php

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Services\Contracts\IPaymentPendingService;

class PaymentPendingService implements IPaymentPendingService
{

    public function __construct(
        protected IGuestRepository $guestRepository
    ){}

    public function show()
    {
        return $this->guestRepository->getPendingPayments();
    }

    public function update()
    {


    }
}