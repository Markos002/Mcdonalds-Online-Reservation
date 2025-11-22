<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IPartyService;
use Illuminate\Http\Request;

class PartyController extends Controller
{

    public function __construct(
        protected IPartyService $partyService
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
            dd($request->all());
    }
}