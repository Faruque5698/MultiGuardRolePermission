<?php

namespace FaruqueAshad\MultiGuardRolePermission\Database\Factories;


use FaruqueAshad\MultiGuardRolePermission\Models\AuthGuard;
use FaruqueAshad\MultiGuardRolePermission\Models\Role;
use FaruqueAshad\MultiGuardRolePermission\Models\RolePermission;

class RolePermissionFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{
    protected $model = RolePermission::class;
    public function definition()
    {
        return [
            'auth_guard_id' => AuthGuard::first() ? AuthGuard::first()->id : null,
            'role_id' => Role::first() ? Role::first()->id : null,
            'auth_user_id' => 1,
            'module' => 'Test',
            'operation' => 'list',
            'route' => 'test',
            'url' => 'test',
            'is_permit' => 1,
            'route_name' => 'test',
            'method' => 'get'
        ];
    }
}