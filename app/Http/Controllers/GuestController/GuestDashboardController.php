<?php

namespace App\Http\Controllers\GuestController;

use App\Http\Controllers\Controller;

class GuestDashboardController extends Controller
{

    public function index()
    {

        return view('pages.guest.dashboard');
        
    }
}