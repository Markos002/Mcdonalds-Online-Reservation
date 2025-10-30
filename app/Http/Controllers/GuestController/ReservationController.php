<?php 

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationFormRequest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function store(ReservationFormRequest $request)
    {
        dd($request);
        try{

            return Redirect()->back()->with('success', 'Your reservation has been recorded.');

        }catch(\Exception $e){

            return Redirect()->back()->with('error', $e->getMessage());

        }
    }



}