<?php

namespace Kawan\GTK;

use Illuminate\Support\ServiceProvider;

class GtkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'gtk');

    }

    public function register()
    {
    }
}
