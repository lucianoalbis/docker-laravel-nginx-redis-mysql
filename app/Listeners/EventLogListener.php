<?php

namespace App\Listeners;

use App\Events\EventLog;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class EventLogListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Event  $event
     * @return void
     */
    public function handle(EventLog $event)
    {
        if (isset($event->cache_keys) && count($event->cache_keys)) {
            foreach ($event->cache_keys as $cache_key) {
                Log::debug($cache_key);
            }
        }
    }
}
