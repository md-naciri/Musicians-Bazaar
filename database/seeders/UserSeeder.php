<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            [
                'name' => 'admin 1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
                'role' => 1
            ],
            [
                'name' => 'admin 2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'role' => 1
            ],
            [
                'name' => 'admin 3',
                'email' => 'admin3@example.com',
                'password' => Hash::make('password'),
                'role' => 1
            ],
            [
                'name' => 'user 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'role' => 0
            ],
            [
                'name' => 'user 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'role' => 0
            ],
            [
                'name' => 'user 3',
                'email' => 'user3@example.com',
                'password' => Hash::make('password'),
                'role' => 0
            ],
        ];
    
        foreach ($usersData as $userData) {
            User::create($userData);
        }
    }
}
