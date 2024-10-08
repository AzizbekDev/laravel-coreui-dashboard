<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin',
            'user'
        ];

        foreach ($roles as $role) {
            $cRole = Role::create([
                'name'        => $role,
                'description' => 'Role of ' . $role
            ]);
        }
    }
}
