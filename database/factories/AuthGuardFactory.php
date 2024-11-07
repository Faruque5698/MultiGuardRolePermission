<?php

namespace  FaruqueAshad\MultiGuardRolePermission\Database\Factories;

use FaruqueAshad\MultiGuardRolePermission\Models\AuthGuard;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthGuardFactory extends Factory
{
    protected $model = AuthGuard::class;
    public function definition()
    {
        return [
            'name' => 'web',
            'model' => 'Customer',
        ];
    }
}