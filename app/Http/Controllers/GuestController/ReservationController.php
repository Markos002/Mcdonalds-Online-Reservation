<?php 

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationFormRequest;
use App\Services\Contracts\IReservationService;
use App\Services\Contracts\ITimeSlotAvailability;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function __construct(
        protected IReservationService $reservationService,
        protected ITimeSlotAvailability $timeSlotAvailability
    ){}

    public function index(Request $request)
    {
        $date = $request->query('date');
        $timeIn = $request->query('time_in');

        return view('pages.reservation',compact('date', 'timeIn'));

    }

    public function post(Request $request)
    {
        $date = $request->input('date');
        
       $availableSlot =  $this->timeSlotAvailability->timeSlotAvailable($date);
       
       return response()->json([
            'success' => true,
            'available' => count($availableSlot) > 0,
            'time_slots' => $availableSlot
        ]);
    }

    public function store(ReservationFormRequest $request)
    {
       
 
        try{

            $this->reservationService->store($request->validated());
            return redirect()->route('guest.dashboard')->with('success', 'Your reservation has been successfully submitted!');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());

        }
    }



}