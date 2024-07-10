<?php

namespace App\Providers;

use App\Repositories\BaseImplementation\BaseFetchRepository;
use App\Repositories\BaseImplementation\BaseModifierRepository;
use App\Repositories\BaseImplementation\BaseSetterRepository;
use App\Repositories\Interfaces\BaseInterfaces\BaseFetchInterface;
use App\Repositories\Interfaces\BaseInterfaces\BaseModifierInterface;
use App\Repositories\Interfaces\BaseInterfaces\BaseSetterInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            BaseFetchInterface::class,
            BaseFetchRepository::class
        );


        $this->app->bind(
            BaseSetterRepository::class,
            BaseSetterInterface::class
        );

        $this->app->bind(
            BaseModifierInterface::class,
            BaseModifierRepository::class

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
