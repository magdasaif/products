<?php

namespace Magdasaif\Products\app\providers; 

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Magdasaif\Products\app\http\controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        // if(is_dir(base_path('modules/products/routes/web.php'))){
        //     Route::middleware('web')
        //         ->namespace($this->moduleNamespace)
        //         ->group(base_path('modules/products/routes/web.php'));
        // }

        if (file_exists(base_path('routes/product.php'))) {
            Route::middleware('web')
                ->namespace($this->moduleNamespace)
                ->group(base_path('routes/product.php'));
        }
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        // if(is_dir(base_path('modules/products/routes/api.php'))){
        //     Route::prefix('api')
        //         ->middleware('api')
        //         ->namespace($this->moduleNamespace)
        //         ->group(base_path('modules/products/routes/api.php'));
        // }
    }
}
