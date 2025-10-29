<?php 

namespace App\Repository\Contracts;

interface IFoodPackageRepository
{

    public function create(array $data);
    public function find(int $id);
    public function update(int $id, array $data);
    public function delete(int $id);
}