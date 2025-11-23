<?php

namespace App\Services\Contracts;

interface IGuestReservationAmendService
{

    public function edit($guestId);

    public function update($data);
}