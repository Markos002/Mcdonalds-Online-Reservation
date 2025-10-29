<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartyDetail extends Model
{
    
    protected $primaryKey = 'party_dtl_id';

    protected $keyType = 'int';

    public $incrementing = true;

    protected $fillable = [
        'guest_id',
        'check_in_date',
        'check_in_time',
        'check_out_time',
        'time_extend',
        'adults',
        'kids',
        'branch',
        'occasion',
        'party_package',
        'special_req',
        'status',
        'reservation_id',
        'package_price',
        'grand_total'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class,'guest_id');
    }
}
