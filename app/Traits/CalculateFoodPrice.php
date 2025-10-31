<?php

namespace App\Traits;

trait CalculateFoodPrice
{

    public function calculateFoodPrice($data)
    {
       $foodTotal = 0;
                if(!empty($data['food_packages'])){
                    foreach ($data['food_packages'] as $package) {
                        $foodTotal += $package['price'] * $package['quantity'];
                    }
                }
                
        $packagePrice = $data['package_price'] ?? 0;

        return $foodTotal + $packagePrice;
    }
}