<?php

namespace App\Listeners;

use App\DeviceReport;
use App\Events\DeviceCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeviceCreatedListener
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
     * @param  DeviceCreated $event
     *
     * @return void
     */
    public function handle(DeviceCreated $event)
    {
        $deviceReport        = new DeviceReport();
        $deviceReport->event = "created";
        $event->device->history()->save($deviceReport);
    }
}
