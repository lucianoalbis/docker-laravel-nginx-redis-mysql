<?php

namespace App\Http\Services;

use App\Http\Interfaces\LogInterface;

class LogService
{
    private $logInterface;

    public function __construct(LogInterface $logInterface)
    {
        $this->logInterface = $logInterface;
    }

    public function write($data)
    {
        return $this->logInterface->write($data);
    }

    public function read($params)
    {
        return $this->logInterface->read($params);
    }
}
