<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $users = [
         [
            'username' => 'guestAccont',
            'email'    => 'guestaccount@gmail.com',
            'role'     => 'guest',
            'password' => bcrypt('guest123'),
            'created_at' => now()

         ],
         [
            'username' => 'adminAccount',
            'email'    => 'adminaccount@gmail.com',
            'role'     => 'admin',
            'password' => bcrypt('admin123'),
            'created_at' => now()
         ]
       ];

       foreach($users as $user){
            User::create($user);
       }
    }
}
