<?php

namespace App\Http\Controllers\Api;

use App\DeviceReport;
use App\Events\DeviceCreated;
use App\Events\DeviceReported;
use App\Events\DeviceStarted;
use App\Events\DeviceStoped;
use App\Http\Controllers\Controller;
use App\Http\Resources\Device;
use App\Repository\Device\DeviceRepositoryInterface;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\Factory;

/**
 * Class DeviceController
 * @package App\Http\Controllers
 */
class ReportController extends ApiController
{
    private $deviceRepository;

    public function __construct(DeviceRepositoryInterface $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    public function receive($deviceName)
    {
        $device               = $this->deviceRepository->get($deviceName);
        $deviceReport         = new DeviceReport();
        $deviceReport->event  = "report_received";
        $deviceReport->report = json_encode(request()->all());
        $device->history()->save($deviceReport);

        return $this->respond(['status' => 'success']);
    }
}
