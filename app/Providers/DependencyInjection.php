<?php

namespace App\Providers;

use App\Repository\Contracts\IFoodPackageRepository;
use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Repository\Contracts\IUserRepository;
use App\Repository\FoodPackageRepository;
use App\Repository\GuestRepository;
use App\Repository\PartyDetailRepository;
use App\Repository\UserRepository;
use App\Services\Contracts\IReservationService;
use App\Services\GenerateSessionService;
use App\Services\ReservationService;
use App\Services\Contracts\IGenerateSessionService;
use Illuminate\Support\ServiceProvider;

class DependencyInjection extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Repository 
        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(IPartyDetailRepository::class, PartyDetailRepository::class);
        $this->app->bind(IGuestRepository::class, GuestRepository::class);
        $this->app->bind(IFoodPackageRepository::class, FoodPackageRepository::class);

        // Services
        $this->app->bind(IGenerateSessionService::class,GenerateSessionService::class);
        $this->app->bind(IReservationService::class, ReservationService::class);   
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
