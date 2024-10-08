<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-user',
            'read-user',
            'update-user',
            'delete-user',
            'create-role',
            'read-role',
            'update-role',
            'delete-role',
            'create-permission',
            'read-permission',
            'update-permission',
            'delete-permission',
            'read-settings',
            'update-settings',
            'read-locales',
            'update-locales',
        ];
        $adminRole = Role::where('name', 'admin')->firstOrFail();

        foreach ($permissions as $permission) {
            $cPermission = Permission::create([
                'name'        => $permission,
                'description' => 'Permission to ' . $permission
            ]);
            // Attach permission to admin role
            $adminRole->permissions()->attach($cPermission);
        }
    }
}
