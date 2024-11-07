<?php

namespace FaruqueAshad\MultiGuardRolePermission\Database\Factories;

use FaruqueAshad\MultiGuardRolePermission\Models\AuthGuard;
use FaruqueAshad\MultiGuardRolePermission\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;
    public function definition()
    {
        return [
            'auth_guard_id' => AuthGuard::first() ? AuthGuard::first()->id : null,
            'name' => 'Admin',
            'is_admin' => false,
            'note' => 'test'
        ];
    }
}