<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return response()->json('ok');
    }

    public function checkRedis(Request $request)
    {
        $request->session()->put('Laravel', 'The PHP Framework For Web Artisans');
        return $request->session()->get('Laravel');
    }
}
