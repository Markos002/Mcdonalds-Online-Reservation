<?php

namespace App\Traits;

trait CalculateFoodPrice
{

    public function calculateFoodPrice(array $data): float
    {
        $foodPack     = $this->calculateItemsTotal($data['food_packages'] ?? []);
        $addOns       = $this->calculateItemsTotal($data['addons'] ?? []);
        $packagePrice = $this->avoidDublicatePartyPackage($data) ?? 0;
       // $packagePrice = $data['package_price'] ?? 0;

        return $foodPack + $addOns + $packagePrice;
    }

    private function calculateItemsTotal(array $items): float
    {
        return collect($items)->sum(fn($item) => 
            ($item['price'] ?? 0) * ($item['quantity'] ?? 0)
        );
    }

    public function ifExist($data)
    {
        $partyPackage = 2500;

        return $data['occasion'] === 'birthday'
                ? $partyPackage
                : null;
    }

    private function avoidDublicatePartyPackage($data)
    {
       $exist = $this->ifExist($data);
        if(!empty($data['package_price']) || !empty($exist)){
          return 2500;
        }
    }
}