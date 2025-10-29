<?php 

namespace App\Repository;

use App\Models\PartyDetail;
use App\Repository\Contracts\IPartyDetailRepository;


class PartyDetailRepository implements IPartyDetailRepository
{

    public function create(array $data)
    {
        return PartyDetail::create($data);
    }

    public function find($id)
    {
        return PartyDetail::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $find = $this->find($id);
        return $find->update($data);
    }

    public function delete(int $id)
    {
        $find = $this->find($id);
        return $find->delete();
    }
}