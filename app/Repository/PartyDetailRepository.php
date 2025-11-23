<?php 

namespace App\Repository;

use App\Models\PartyDetail;
use App\Repository\Contracts\IPartyDetailRepository;
use Illuminate\Support\Facades\DB;


class PartyDetailRepository implements IPartyDetailRepository
{

    public function create(array $data)
    {
        return PartyDetail::create($data);
    }

    public function find($id)
    {
        return PartyDetail::findOrFail($id);
    }

    public function findByGuestId($id)
    {
        return PartyDetail::where('guest_id', $id)
                ->where('payment_status', 'unpaid')
                ->firstOrFail();
    }
    public function update(int $id, array $data)
    {
        $find = $this->find($id);
        return $find->update($data);
    }

    public function delete(int $id)
    {
        $find = $this->find($id);
        return $find->delete();
    }

    public function getAvailablTimeSlot(string $date)
    {
        return PartyDetail::select(
                'check_in_time',
                'check_out_time',
                'time_extend'
            )
            ->where('check_in_date', $date)
            ->orderBy('check_in_time')
            ->get();     
    }

    public function getReservationStatusOverView()
    {
        
        return PartyDetail::selectRaw('
            COUNT(CASE WHEN party_status = "finished"  THEN 1 END)AS completed,
            COUNT(CASE WHEN party_status = "ongoing"   THEN 1 END)AS ongoing,
            COUNT(CASE WHEN party_status = "pending"   THEN 1 END)AS pending,
            COUNT(CASE WHEN party_status = "cancelled" THEN 1 END)AS cancelled
        ',)
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->first();
    }

    public function getSalesIncomeByYear($year)
    {
       return PartyDetail::selectRaw('
            MONTH(created_at) AS month_num,
            DATE_FORMAT(created_at, "%b") AS month,
            SUM(grand_total) AS totalIncome
        ')
        ->where('payment_status', 'paid')
        ->whereYear('created_at', $year)
        ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('DATE_FORMAT(created_at, "%b")'))
        ->orderBy('month_num')
        ->get();
    }

    public function getMonthlyReservationTrends($year)
    {
        return PartyDetail::selectRaw('
            DATE_FORMAT(created_at, "%b") AS month,
            COUNT(CASE WHEN party_status = "finished" THEN 1 END)AS completed,
            COUNT(CASE WHEN party_status = "cancelled" THEN 1 END)AS cancelled
        ')
         ->whereYear('created_at', $year)
         ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('DATE_FORMAT(created_at, "%b")'))
         ->orderBy(DB::raw('MONTH(created_at)'))
         ->get();
    }

    public function findGuestReservationIfNotPending($guestId)
    {
        return PartyDetail::where('party_status', 'pending')
               ->find($guestId);
                  
    }

    public function getReservationRecordHistory()
    {
        return PartyDetail::select(
                    'party_dtl_id',
                    'check_in_date',
                    DB::raw("CONCAT(check_in_time, ' - ', check_out_time)AS check_period"),
                    'time_extend AS extended_time',
                    'occasion',
                    'party_package',
                    'party_status',
                    'payment_status',
                    'reservation_id',
                    'grand_total'
            )
                ->paginate(7);
    }
    

}