<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123456',
                'user_role' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => '13456',
            ],
            [
                'name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => '13456',
            ]
        ];

        foreach($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'user_role' => isset($user['user_role'])? $user['user_role'] : null,
            ]);
        }

    }
}
