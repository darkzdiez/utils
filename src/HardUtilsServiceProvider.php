<?php

namespace Hard\Utils;

use Illuminate\Support\ServiceProvider;

class HardUtilsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }

    public function register()
    {
    }
}
