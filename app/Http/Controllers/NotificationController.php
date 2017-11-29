<?php namespace App\Http\Controllers;

use App\Events\NotifyDevice;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function send(Request $request, $device)
    {
        try {
            broadcast(new NotifyDevice($device));
            $request->session()->flash("success", "Message has been Sent to device.");
        } catch (\Exception $e) {
            $request->session()->flash("error", "Error Sending Message to device. ".$e->getMessage());
        }

        return back();
    }
}