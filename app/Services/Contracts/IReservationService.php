<?php

namespace App\Services\Contracts;

interface IReservationService
{
    public function store(array $data);
}