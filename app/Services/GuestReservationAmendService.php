<?php 

namespace App\Services;

use App\Repository\Contracts\IGuestRepository;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Repository\GuestRepository;
use App\Services\Contracts\IGuestReservationAmendService;
use App\Traits\CalculateFoodPrice;
use Exception;


class GuestReservationAmendService implements IGuestReservationAmendService
{

    use CalculateFoodPrice;
    public function __construct(
        protected IGuestRepository $guestRepository,
        protected IPartyDetailRepository $partyDetialRepository,
    ){}

    public function edit($guestId)
    {
        $guestData = $this->guestRepository->findGuestReservationForEdit($guestId);
        $guestFindIfExist = $this->partyDetialRepository->findGuestReservationIfNotPending($guestId);

        abort_if(!$guestFindIfExist, 404, "Guest with ID {$guestId} not found.");

        return $guestData;
    }

    public function update($data)
    {
    
        $guest = $this->updateGuest($data);
     
        if(!$guest){
            throw new Exception("Guest not found with ID: {$data['guest_id']}");
        }
        
        $this->updatePartyDetails($guest, $data);
        $this->updateFoodPacks($guest, $data);
        $this->updateAddOns($guest, $data);
        
        return $guest;
    }

    private function updateGuest($data)
    {
        return $this->guestRepository->update($data['guest_id'],[
            'first_name' => ucwords($data['first_name']),
            'last_name'  => ucwords($data['last_name']),
            'address'    => ucwords($data['address']),
            'city'       => ucwords($data['city']),
            'zip_code'   => $data['zip_code'],
            'phone'      => $data['phone'],
        ]);
    }

    private function updatePartyDetails($guest, $data)
    {
        $grandTotal  = $this->calculateFoodPrice($data);
        $partyDetail = $guest->partyDetail;
        $packagePrice = $this->ifExist($data);
        
        if(!$partyDetail){
            throw new Exception("Party detail not found for guest ID: {$guest->id}");
        }

        return $partyDetail->update([
            'adults'         => $data['adults'] ?? 0,
            'kids'           => $data['kids'] ?? 0,
            'occasion'       => $data['occasion'],
            'party_package'  => $data['party_package'] ?? null,
            'package_price'  => $packagePrice,
            'grand_total'    => $grandTotal
        ]);
    }

   private function updateFoodPacks($guest, $data)
   {
        $guest->foodPack()->delete();
        
        if (!empty($data['food_packages'])) {
            foreach($data['food_packages'] as $package){
                if (!empty($package['quantity']) && $package['quantity'] > 0) {
                    $guest->foodPack()->create([
                        'name'     => $package['name'],
                        'price'    => $package['price'],
                        'quantity' => $package['quantity'],
                        'total'    => $package['price'] * $package['quantity']
                    ]);
                }
            }
        }
    }

    private function updateAddOns($guest, $data)
    {
         
        foreach($data['addons'] as $addon) {
            if (!empty($addon['quantity']) && $addon['quantity'] > 0) {
                $guest->foodPack()->create([
                    'name'     => ucwords($addon['name']),
                    'price'    => $addon['price'],
                    'quantity' => $addon['quantity'],
                    'total'    => $addon['price'] * $addon['quantity']
            ]);
            }         
        }
    }
    
}