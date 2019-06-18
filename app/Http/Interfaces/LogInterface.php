<?php

namespace App\Http\Interfaces;

interface LogInterface
{
    public function write($data);
    public function read($params);
}
