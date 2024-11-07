<?php

namespace FaruqueAshad\MultiGuardRolePermission\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use FaruqueAshad\MultiGuardRolePermission\Database\Factories\AuthGuardFactory;

class AuthGuard extends Model
{
    use HasFactory;

    protected $table = 'auth_guards';
    protected $guarded = [];

    protected static function newFactory()
    {
        return AuthGuardFactory::new();
    }
}