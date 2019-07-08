<?php

namespace App\Http\Controllers;

use App\Events\EventLog;

class EventController extends Controller
{
    public function __construct()
    {
    }

    public function event()
    {
        $arr_caches = ['categories', 'products'];

        event(new EventLog($arr_caches));
        return 1;
    }
}
