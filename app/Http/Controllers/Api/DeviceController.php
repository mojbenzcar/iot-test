<?php

namespace App\Http\Controllers\Api;

use App\DeviceReport;
use App\Events\DeviceStarted;
use App\Events\DeviceStopped;

use App\Repository\Device\DeviceRepositoryInterface;


/**
 * Class DeviceController
 * @package App\Http\Controllers
 */
class DeviceController extends ApiController
{
    private $deviceRepository;

    public function __construct(DeviceRepositoryInterface $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    public function start($device)
    {
        $device         = $this->deviceRepository->get($device);
        $device->status = "on";
        $device->save();
        event(DeviceStarted::class, $device);

        return $this->respond(['status' => 'success']);
    }

    /**
     * Shows details of devices with history
     *
     * @param $device
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param $id
     *
     */
    public function stop($device)
    {
        $device         = $this->deviceRepository->get($device);
        $device->status = "off";
        $device->save();
        event(DeviceStopped::class, $device);

        return $this->respond(['status' => 'success']);
    }

    /**
     * write brief description
     *
     * @param $device
     *
     * @return mixed
     */
    public function acknowledge($device)
    {
        $device              = $this->deviceRepository->get($device);
        $deviceReport        = new DeviceReport();
        $deviceReport->event = "notification_received";
        $device->history()->save($deviceReport);

        return $this->respond(['status' => 'success']);
    }
}
