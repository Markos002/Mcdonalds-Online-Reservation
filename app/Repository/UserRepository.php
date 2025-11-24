<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Contracts\IUserRepository;

class UserRepository implements IUserRepository
{

    public function create(array $data)
    {
        return User::create($data);
    }

    public function find(int $id)
    {
        return User::findOrFail($id);
    }

    public function isAdmin($id)
    {
         return User::where('id', $id)
                ->where('role', 'admin')
                ->exists();
    }

    public function update(int $id, array $data)
    {
        $user = $this->find($id);
        return $user->update($data);
    }

    public function delete(int $id)
    {
        $user = $this->find($id);
        return $user->delete();
    }

}