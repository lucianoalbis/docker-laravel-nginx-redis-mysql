<?php

namespace App\Http\Services;

class IndexServices
{
    public function checkRedis(array $request)
    {
        return response()->json('ok');
    }
}
