<?php

namespace App\Providers;

use App\Console\Commands\FirstConcrete;
use App\Console\Commands\MyCommand;
use App\Console\Commands\MyInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->when(MyCommand::class)
            ->needs(MyInterface::class)
            ->give(FirstConcrete::class);
    }
}
