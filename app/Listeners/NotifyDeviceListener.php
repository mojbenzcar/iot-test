<?php

namespace App\Listeners;

use App\DeviceReport;
use App\Events\DeviceCreated;
use App\Events\NotifyDevice;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyDeviceListener
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
    public function handle(NotifyDevice $event)
    {
        $deviceReport        = new DeviceReport();
        $deviceReport->event = "notification_sent";
        $event->device->history()->save($deviceReport);
    }
}
