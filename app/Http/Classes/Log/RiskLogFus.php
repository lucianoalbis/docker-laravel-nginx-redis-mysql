<?php

namespace app\Http\Classes\Log;

use App\Http\Interfaces\LogInterface;

class RiskLogFus implements LogInterface
{
    public function write ($data)
    {
        return 'RiskLogFus::write '.$data;
    }

    public function read ($params)
    {
        return 'RiskLogFus::read '.$params;
    }
}
