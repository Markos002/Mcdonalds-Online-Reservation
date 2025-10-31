<?php

namespace App\Services;

use App\Repository\Contracts\IFoodPackageRepository;
use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IReservationService;
use App\Traits\CalculateFoodPrice;
use App\Traits\GenerateReservationId;
use App\Traits\GetAuthId;
use Carbon\Carbon;
use Exception;

class ReservationService implements IReservationService
{

    use GetAuthId;
    use GenerateReservationId;
    use CalculateFoodPrice;

    public function __construct(
        protected IPartyDetailRepository $partyDetailRepository,
        protected IGuestRepository       $guestRepository,
        protected IFoodPackageRepository $foodPackageRepository
    ){}

    public function store(array $data)
    {
        $userId = $this->getAuthId();
        
        // Create guest
        $guest = $this->createGuest($userId, $data);
        
        if (!$guest) {
            throw new \Exception('No Data Found!');
        }
        
        // Create party details
        $this->createPartyDetails($guest, $data);
        
        // Create food packages
        $this->createFoodPackages($guest, $data);
        
        return $guest;
    }

    private function createGuest($userId, array $data)
    {
        return $this->guestRepository->create([
            'user_id'    => $userId,
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'address'    => $data['address'],
            'zip_code'   => $data['zip_code'],
            'phone'      => $data['phone'],
        ]);
    }

    private function createPartyDetails($guest, array $data)
    {
        $foodTotal = $this->calculateFoodPrice($data);
        $reservationId = $this->generateReservationId();
        
        return $guest->partyDetail()->create([
            'check_in_date'  => $data['check_in_date'],
            'check_in_time'  => $data['check_in_time'],
            'check_out_time' => $data['check_out_time'],
            'adults'         => $data['adults'],
            'kids'           => $data['kids'],
            'occasion'       => $data['occasion'],
            'party_package'  => $data['party_package'],
            'package_price'  => $data['package_price'],
            'grand_total'    => $foodTotal,
            'reservation_id' => $reservationId
        ]);
    }

    private function createFoodPackages($guest, array $data)
    {
        if (empty($data['food_packages'])) {
            return;
        }
        
        foreach ($data['food_packages'] as $package) {
            $guest->FoodPack()->create([
                'name'     => $package['name'],
                'price'    => $package['price'],
                'quantity' => $package['quantity'],
                'total'    => $package['price'] * $package['quantity']
            ]);
        }
    }

}