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
use App\Services\Contracts\IDashboardService;
use App\Services\Contracts\IPartyService;
use App\Services\Contracts\IPaymentPendingService;
use App\Services\Contracts\IRecordRegistryService;
use App\Services\Contracts\IReservationService;
use App\Services\Contracts\ITimeSlotAvailability;
use App\Services\GenerateSessionService;
use App\Services\PartyService;
use App\Services\PaymentPendingService;
use App\Services\RecordRegistryService;
use App\Services\ReservationService;
use App\Services\Contracts\IGenerateSessionService;
use App\Services\DashboardReportService;
use App\Services\TimeSlotAvailability;
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
        $this->app->bind(IPartyService::class, PartyService::class);
        $this->app->bind(IPaymentPendingService::class, PaymentPendingService::class);
        $this->app->bind(IRecordRegistryService::class, RecordRegistryService::class);
        $this->app->bind(ITimeSlotAvailability::class, TimeSlotAvailability::class);
        $this->app->bind(IDashboardService::class, DashboardReportService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
