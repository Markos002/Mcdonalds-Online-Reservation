<?php

namespace App\Repository;

use App\Models\Guest;
use App\Repository\Contracts\IGuestRepository;
class GuestRepository implements IGuestRepository
{

    public function create(array $data)
    {
        return Guest::create($data);
    }

    public function find(int $id)
    {
        return Guest::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $find = $this->find($id);
        return $find->update($data);
    }

    public function delete($id)
    {
        $find = $this->find($id);
        return $find->delete();
    }
    
}