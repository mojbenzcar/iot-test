<?php namespace App\Http\Controllers;

use App\Events\NotifyDevice;
use App\Repository\Device\DeviceRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class NotificationController
 * @package App\Http\Controllers
 */
class NotificationController extends Controller
{
    protected $deviceRepository;

    public function __construct(DeviceRepositoryInterface $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    public function send(Request $request, $deviceName)
    {
        try {
            $device = $this->deviceRepository->get($deviceName);
            broadcast(new NotifyDevice($device));
            $request->session()->flash("success", "Message has been Sent to device.");
        } catch (\Exception $e) {
            $request->session()->flash("error", "Error Sending Message to device. ".$e->getMessage());
        }

        return back();
    }
}