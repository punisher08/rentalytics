<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'rentalytics',
                'email' => 'rentalytics@example.com',
                'role' => 'admin',
                'birthday' => '1990-01-01',
                'age' => 32,
                'gender' => 'male',
                'contact' => '1234567890',
                'password' => Hash::make('admin'),
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@example.com',
                'birthday' => '1990-01-01',
                'age' => 32,
                'gender' => 'male',
                'contact' => '1234567890',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@example.com',
                'birthday' => '1995-05-10',
                'age' => 27,
                'gender' => 'female',
                'contact' => '9876543210',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'User 3',
                'email' => 'user3@example.com',
                'birthday' => '1995-05-10',
                'age' => 27,
                'gender' => 'female',
                'contact' => '9876543210',
                'password' => Hash::make('password'),
            ],
            // Add more users as needed...
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
