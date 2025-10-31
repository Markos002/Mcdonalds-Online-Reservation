<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Services\Contracts\IRecordRegistryService;

class RecordRegistryController extends Controller
{

    public function __construct(
        protected IRecordRegistryService $recordRegistryService 
    ){}
}