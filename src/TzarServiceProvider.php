<?php

namespace Dzhwarkawan\Tzar;

use Illuminate\Support\ServiceProvider;

class TzarServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'tzar');

    }

    public function register()
    {
    }
}
