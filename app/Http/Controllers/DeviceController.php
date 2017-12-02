<?php

namespace App\Http\Controllers;

use App\Events\DeviceCreated;
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

    public function index()
    {
        return $this->deviceRepository->all();
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
        $device = $this->deviceRepository->get($id);

        return view('device.show', compact('device'));
    }

    /**
     * Shows details of devices with history
     *
     * @param         $id
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id, Request $request)
    {
        $device = $this->deviceRepository->get($id);
        if ($device->delete()) {
            $request->session()->flash("success", "Device has been successfully deleted.");
        } else {
            $request->session()->flash("error", "Error deleting device.");
        }

        return back();
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
        if ($device = $this->deviceRepository->create()) {
            event(New DeviceCreated($device));
            $request->session()->flash("success", "Device has been successfully created.");
        } else {
            $request->session()->flash("error", "Error creating device.");
        }

        return back();
    }
}
