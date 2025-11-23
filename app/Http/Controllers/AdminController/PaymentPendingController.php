<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IGuestReservationAmendService;
use App\Services\Contracts\IPaymentPendingService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;



class PaymentPendingController extends Controller
{

    public function __construct(
        protected IPaymentPendingService $paymentPendingService,
        protected IGuestReservationAmendService $guestReservationAmendService
    ){}


    public function index()
    {

        $pendingPayments = $this->paymentPendingService->show();
        
        return view('pages.admin.appointment',compact(
            'pendingPayments'
        ));

    }

    public function edit($guestId)
    {
        try{
            $guestData = $this->guestReservationAmendService->edit($guestId);

            return view('pages.admin.partial.edit',compact(
                'guestData'
            ));
            
        }catch(HttpException $e){
            return redirect()->back()->with('error', $e->getMessage());
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update($id, $action)
    {
        dd($id,$action);
    }
}