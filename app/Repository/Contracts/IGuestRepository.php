<?php 

namespace App\Repository\Contracts;

interface IGuestRepository
{

    public function create(array $data);
    public function find(int $id);
    public function update(int $id, array $data);
    public function delete($id);
}