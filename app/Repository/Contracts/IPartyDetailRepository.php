<?php

namespace App\Repository\Contracts;

interface IPartyDetailRepository
{

    public function create(array $data);
    public function find($id);
    public function update(int $id, array $data);
    public function delete(int $id);

    public function getAvailablTimeSlot(string $date);
}