<?php

namespace Dzhwarkawan\Tsar;

use Illuminate\Support\ServiceProvider;

class TsarServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'tsar');

    }

    public function register()
    {
    }
}
