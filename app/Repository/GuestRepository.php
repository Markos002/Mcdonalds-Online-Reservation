<?php

namespace App\Repository;

use App\Models\Guest;
use App\Repository\Contracts\IGuestRepository;
use Illuminate\Support\Facades\DB;

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

    public function getPendingPayments()
    {

        return Guest::with('partyDetail',function($query){
                        $query->select(
                            
                        );
                        })
                  ->select(
                    'guest_id',
                    DB::raw("CONCAT(first_name,', ',last_name) AS customer"),

                  )
                  ->paginate(10);
    }
    
}