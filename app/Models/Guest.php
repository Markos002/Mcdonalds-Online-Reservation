<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $primaryKey = 'guest_id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'zip_code',
        'phone',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'user_id');
    }

    public function partyDetail()
    {
        return $this->hasOne(PartyDetail::class,'guest_id', 'guest_id');
    }

    public function foodPack()
    {
        return $this->hasMany(FoodPackage::class,'guest_id', 'guest_id');
    }
}
