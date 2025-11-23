<?php

namespace App\Services\Contracts;

interface IPaymentPendingService
{

    public function show();
    public function update($id, $action);

    
}