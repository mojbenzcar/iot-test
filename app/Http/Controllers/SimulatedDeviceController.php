<?php

namespace App\Http\Controllers;

use App\Http\Resources\Device;
use App\Repository\Device\DeviceRepositoryInterface;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\Factory;

/**
 * Class SimulatedDeviceController
 * @package App\Http\Controllers
 */
class SimulatedDeviceController extends Controller
{
    private $deviceRepository;

    public function __construct(DeviceRepositoryInterface $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    /**
     * write brief description
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $device = $this->deviceRepository->all()->first();

        return view('simulated_device.index', compact('device'));
    }
}
