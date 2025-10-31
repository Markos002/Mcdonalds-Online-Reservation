<?php 

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationFormRequest;
use App\Services\Contracts\IReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function __construct(
        protected IReservationService $reservationService,
    ){}

    public function store(ReservationFormRequest $request)
    {
   
        try{

            $this->reservationService->store($request->validated());
            return redirect()->back()->with('success', 'Your reservation has been successfully submitted!');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());

        }
    }



}