<?php

namespace App\Listeners;

use App\DeviceReport;
use App\Events\DeviceReported;

class DeviceReportedListener
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
     * @param  DeviceReported $event
     *
     * @return void
     */
    public function handle(DeviceReported $event)
    {
        $deviceReport        = new DeviceReport();
        $deviceReport->event = "report_received";

        $event->device->history()->save($deviceReport);
    }
}
