<?php

namespace App\Services;

use App\Repository\Contracts\IFoodPackageRepository;
use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\IReservationService;
use App\Traits\GetAuthId;
use Carbon\Carbon;
use Exception;

class ReservationService implements IReservationService
{

    use GetAuthId;
    public function __construct(
        protected IPartyDetailRepository $partyDetailRepository,
        protected IGuestRepository       $guestRepository,
        protected IFoodPackageRepository $foodPackageRepository
    ){}

    public function store(array $data)
    {

        $userId = $this->getAuthId();
            $guest = $this->guestRepository->create([
                   'user_id'    => $userId,
                   'first_name' => $data['first_name'],
                   'last_name'  => $data['last_name'],
                   'address'    => $data['address'],
                   'zip_code'   => $data['zip_code'],
                   'phone'      => $data['phone'],
            ]);

            if(!$guest){
               throw new \Exception('No Data');
            }

              $rsrvID = $this->generateReservationId();

            $guest->partyDetail()->create([
                   'check_in_date'  => $data['check_in_date'],
                   'check_in_time'  => $data['check_in_time'],
                   'check_out_time' => $data['check_out_time'],
                   'adults'         => $data['adults'],
                   'kids'           => $data['kids'],
                   'occasion'       =>$data['occasion'],
                   'reservation_id' => $rsrvID

            ]);
            
            foreach($data['food_packages'] as $package){
               $guest->FoodPack()->create([
                    'name'     => $package['name'],
                    'price'    => $package['price'],
                    'quantity' => $package['quantity'],
                    'total'    => $package['price'] * $package['quantity']
               ]);

            }     
    }

    private function generateReservationId()
    {
        $currentYear = carbon::now()->format('Y');  // eg: 2025 Year
        $monthDay    = Carbon::now()->format('md'); // eg: 1031 Month/Day
        $timeNow     = Carbon::now()->format('hi'); // eg: 0946 Hour/Min

        return 'MCDO-' . $currentYear . '-' . $monthDay . '-' . $timeNow;
    }
}