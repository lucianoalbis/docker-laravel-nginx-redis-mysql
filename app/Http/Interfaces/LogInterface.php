<?php

namespace App\Http\Interfaces;

interface LogInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function write($data);

    /**
     * @param $params
     * @return mixed
     */
    public function read($params);
}
