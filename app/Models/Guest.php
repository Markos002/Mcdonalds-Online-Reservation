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
}
