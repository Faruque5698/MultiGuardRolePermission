<?php

namespace FaruqueAshad\MultiGuardRolePermission;

use Illuminate\Support\ServiceProvider;
use FaruqueAshad\MultiGuardRolePermission\Console\CreateAuth;
use Illuminate\Routing\Router;
use FaruqueAshad\MultiGuardRolePermission\Http\Middleware\Authenticate;
use FaruqueAshad\MultiGuardRolePermission\Http\Middleware\Permission;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // load migration
        $this->migration();
        // load command
        $this->command();
        // load middleware
        $this->middleware();
        //load route
        $this->routeRegister();
    }
    private function migration()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
    private function command(){
        // Register the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateAuth::class,
            ]);
        }
    }
    private function middleware(){
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('check.auth', Authenticate::class);
        $router->aliasMiddleware('permission', Permission::class);
    }
    private function routeRegister()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/route.php');
    }
}