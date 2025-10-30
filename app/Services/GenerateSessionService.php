<?php 

namespace App\Services;

use App\Services\Contracts\IGenerateSessionService;

class GenerateSessionService implements IGenerateSessionService
{

    public function generateSession($request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        return $request->user();
    }
}