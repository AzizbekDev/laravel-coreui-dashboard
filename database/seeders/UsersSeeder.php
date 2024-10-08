<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('password')
            ]
        ];
        
        foreach ($users as $user) {
            $cUser = User::create($user);
            if($user['name'] === 'Admin') {
                $cUser->assignRole('admin');
            }else {
                $cUser->assignRole('user');
            }
        }
    }
}
