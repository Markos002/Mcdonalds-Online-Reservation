<?php 

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait GetAuthId
{

    public function getAuthId()
    {
         return  Auth::id();
    }
}