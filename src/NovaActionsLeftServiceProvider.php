<?php

namespace SaintSystems\NovaActionsLeft;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class NovaActionsLeftServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-actions-left', __DIR__ . '/../dist/js/tool.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {}
}
