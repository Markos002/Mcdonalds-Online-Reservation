<?php

namespace App\Repository;

use App\Models\Guest;
use App\Repository\Contracts\IGuestRepository;
use Illuminate\Support\Facades\DB;

class GuestRepository implements IGuestRepository
{

    public function create(array $data)
    {
        return Guest::create($data);
    }

    public function find(int $id)
    {
        return Guest::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $find = $this->find($id);
        return $find->update($data);
    }

    public function delete($id)
    {
        $find = $this->find($id);
        return $find->delete();
    }

    public function getPendingPayments()
    {
        $paymentStatus = 'unpaid';
        $partyStatus   = 'pending';

        return Guest::whereHas('partyDetail', function ($query) use ($paymentStatus, $partyStatus) {
                $query->where('payment_status', $paymentStatus)
                    ->where('party_status', $partyStatus);
            })
            ->with(['partyDetail' => function ($query) use ($paymentStatus, $partyStatus) {
                $query->select(
                    'guest_id',
                    'reservation_id',
                    'occasion',
                    'created_at',
                    'grand_total'
                )
                ->where('payment_status', $paymentStatus)
                ->where('party_status', $partyStatus);
            }])
            ->select(
                'guest_id',
                DB::raw("CONCAT(first_name, ' ', last_name) AS customer")
            )
            ->get();
    }

    public function getOnGoingParties()
    {
        $paymentStatus = 'paid';
        $partyStatus   = 'ongoing';

        return Guest::whereHas('partyDetail', function ($query) use ($paymentStatus, $partyStatus) {
                $query->where('payment_status', $paymentStatus)
                    ->where('party_status', $partyStatus);
            })
            ->with(['partyDetail' => function ($query) use ($paymentStatus, $partyStatus) {
                $query->select(
                    'guest_id',
                    'reservation_id',
                    'occasion',
                    'created_at',
                    'check_in_date',
                    'party_status',
                    'payment_status'
                )
                ->where('payment_status', $paymentStatus)
                ->where('party_status', $partyStatus);
            }])
            ->select(
                'guest_id',
                DB::raw("CONCAT(first_name, ' ', last_name) AS customer")
            )
            ->paginate(10);
    }

    public function getRecords()
    {
        
        return Guest::with(['partyDetail' => function ($query){
                $query->select(
                    'guest_id',
                    'reservation_id',
                    'occasion',
                    'created_at',
                    'party_status',
                    'payment_status'
                );
            }])
            ->select(
                'guest_id',
                DB::raw("CONCAT(first_name, ' ', last_name) AS customer")
            )
            ->paginate(10);        
    }
    
   
    public function findGuestReservationForEdit($guestId)
    {
        return Guest::with([
            'partyDetail'=>function($query){
                $query->where('party_status', 'pending');
            },
            'foodPack'
        ])
        ->where('guest_id', $guestId)
        ->first();
    }
}