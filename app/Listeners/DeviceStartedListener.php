<?php

namespace App\Listeners;

use App\DeviceReport;
use App\Events\DeviceCreated;
use App\Events\DeviceStarted;
use App\Events\NotifyDevice;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeviceStartedListener
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
     * @param  NotifyDevice $event
     *
     * @return void
     */
    public function handle(DeviceStarted $event)
    {
        $deviceReport        = new DeviceReport();
        $deviceReport->event = "device_started";
        $event->device->history()->save($deviceReport);
    }
}
