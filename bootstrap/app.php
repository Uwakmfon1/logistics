<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() {
             Route::middleware('web')
                // ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));


            // Route::middleware(["web","auth"])
            //         // ->prefix("admin") commented this one out to avoid duplicate admin/admin on the route
            //         ->name("admin.")
            //         ->group(base_path("routes/admin.php"));
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //  $middleware->append(IsAdmin::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
