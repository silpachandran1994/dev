<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RegisterRepository;
use App\Repositories\Interfaces\RegisterInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            RegisterInterface::class, 
            RegisterRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
