<?php

namespace App\Providers;

use App\Repositories\OfferRepository;
use App\Repositories\OfferRepositoryInterface;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            OfferRepositoryInterface::class,
            OfferRepository::class
        );
    }
}
