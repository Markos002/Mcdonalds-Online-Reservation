<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IPartyService;

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
}