<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         parent::boot();

    $this->routes(function () {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // ✅ Add this for admin routes
        Route::middleware('web') // You can add 'auth' or custom middleware here too
            ->prefix('admin')    // Optional: if you want all routes to start with /admin
            ->name('admin.')     // Optional: name prefix (admin.dashboard, etc)
            ->group(base_path('routes/admin.php'));
    });
    }
}
