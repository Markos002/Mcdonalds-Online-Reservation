<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IGuestReservationAmendService;
use App\Services\Contracts\IPartyService;
use App\Services\Contracts\IRecordRegistryService;
use Exception;
use Illuminate\Http\Request;

class PartyController extends Controller
{

    public function __construct(
        protected IPartyService $partyService,
        protected IGuestReservationAmendService $guestReservation,
        protected IRecordRegistryService $recordRegistryService
    ){}

    public function index()
    {
        $pendingParties = $this->partyService->show();
      
        return view('pages.admin.pendingparties',compact(
            'pendingParties'
        ));
    }

    public function edit()
    {
        return view('pages.admin.partial.edit');
    }

    public function update(Request $request)
    {

    
        try{

            $this->guestReservation->update($request->all());
            return Redirect()->route('admin.appointment')->with('success', 'Edit Reservation Successfully.');

        }catch(Exception $e)
        {
            return Redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function timeExtend(Request $request)
    {
    
        try{
            
            $this->recordRegistryService->timeExtend($request->all());
            return Redirect()->back()->with("success", "{$request->extension_note} hour(s) extended succussfully.");

        }catch(Exception $e){

            return Redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}