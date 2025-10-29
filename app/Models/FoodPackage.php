<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodPackage extends Model
{
    
    protected $primaryKey = 'food_pack_id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'guest_id',
        'name',
        'price',
        'quantity',
        'total'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class,'user_id');
    }
}
