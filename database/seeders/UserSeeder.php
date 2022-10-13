<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $user = [
            [
            'username' => 'admin',
            'name' => 'ini adalah admin',
            'email' => 'admin@example.com',
            'level' => 'admin',
            'password' => bcrypt ('admin123'),
            ],
            [
            'username' => 'user1',
            'name' => 'Yuni Ariyani Arifin',
            'email' => 'yuni@example.com',
            'level' => 'user1',
            'password' => bcrypt ('123456'),
            ],
            [
            'username' => 'user2',
            'name' => 'Amory Octovio',
            'email' => 'amory@example.com',
            'level' => 'user2',
            'password' => bcrypt ('1234567'),
            ]
            ];

        foreach ($user as $key => $value){
            user::create($value);
        }

        
        
    }
}
