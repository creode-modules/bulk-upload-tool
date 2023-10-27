<?php

namespace Creode\BulkUploadField;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register custom routes.
        $this->app->booted(function () {
            $this->routes();
        });

        Nova::serving(function (ServingNova $event) {
            Nova::script('bulk-upload-field', __DIR__.'/../dist/js/field.js');
            Nova::style('bulk-upload-field', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function routes()
    {
        Route::middleware(['nova', Authorize::class])
            ->prefix('nova-vendor/bulk-upload-field')
            ->group(__DIR__.'/../routes/api.php');
    }
}
