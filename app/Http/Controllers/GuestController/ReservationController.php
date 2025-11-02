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

    public function index()
    {

        return view('pages.reservation');

    }

    public function post(Request $request)
    {
        $date = $request->input('date');
        
       $availableSlot =  $this->timeSlotAvailability->timeSlotAvailable($date);

       dd($availableSlot);
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