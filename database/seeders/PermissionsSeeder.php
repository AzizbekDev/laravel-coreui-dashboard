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
            'view-users',
            'create-users',
            'update-users',
            'delete-users',
            'view-roles',
            'create-roles',
            'update-roles',
            'delete-roles',
            'view-permissions',
            'create-permissions',
            'update-permissions',
            'delete-permissions',
            'view-settings',
            'update-settings',
            'view-locales',
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
