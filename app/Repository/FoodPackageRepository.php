<?php 

namespace App\Repository;

use App\Models\FoodPackage;
use App\Repository\Contracts\IFoodPackageRepository;

class FoodPackageRepository implements IFoodPackageRepository
{

    public function create(array $data)
    {
        return FoodPackage::create($data);
    }

    public function find(int $id)
    {
        return FoodPackage::findOrFail($id);
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