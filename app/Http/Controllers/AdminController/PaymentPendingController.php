<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IPaymentPendingService;

class PaymentPendingController extends Controller
{

    public function __construct(
        protected IPaymentPendingService $paymentPendingService
    ){}


}