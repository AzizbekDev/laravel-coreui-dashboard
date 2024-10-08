<?php
namespace App\Models\Traits;

use App\Models\Permission;

trait HasPermissions
{
    public function givePermissionTo(...$permissions)
    {
        $permissions = collect($permissions)
            ->flatten()
            ->map(function ($permission) {
                return $this->getStoredPermission($permission);
            })
            ->all();

        $this->permissions()->saveMany($permissions);

        return $this;
    }

    public function hasPermissionTo($permission)
    {
        return $this->permissions->contains('name', $permission);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    protected function getStoredPermission($permissions)
    {
        if (is_string($permissions)) {
            return Permission::whereName($permissions)->firstOrFail();
        }

        if (is_array($permissions)) {
            return Permission::whereIn('name', $permissions)->get();
        }

        return $permissions;
    }

}