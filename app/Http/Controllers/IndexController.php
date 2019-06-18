<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\IndexServices;

class IndexController extends Controller
{
    private $indexServices;

    public function __construct(IndexServices $indexServices)
    {
        $this->indexServices = $indexServices;
    }

    public function index()
    {
        return response()->json('ok');
    }

    public function checkRedis(Request $request)
    {
        return $this->indexServices->checkRedis($request->all());
    }
}
