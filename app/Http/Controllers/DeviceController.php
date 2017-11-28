<?php

namespace App\Http\Controllers;

use App\Http\Resources\Device;
use App\Repository\Device\DeviceRepositoryInterface;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\Factory;

/**
 * Class DeviceController
 * @package App\Http\Controllers
 */
class DeviceController extends Controller
{

    private $deviceRepository;

    public function __construct(DeviceRepositoryInterface $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    /**
     * Shows details of devices with history
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('device.show');
    }

    /**
     * Create Device
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        if ($this->deviceRepository->create()) {
            $request->session()->flash("success", "Device has been successfully created.");
        } else {
            $request->session()->flash("error", "Error creating device.");
        }

        return back();
    }
}
