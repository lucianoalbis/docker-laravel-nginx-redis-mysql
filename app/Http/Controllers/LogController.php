<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;

class LogController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    public function write()
    {
        return $this->logService->write('Register Log');
    }

    public function read()
    {
        return $this->logService->read('Read Log');
    }
}
