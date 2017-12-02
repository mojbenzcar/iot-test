<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotifyDevice implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $device;

    /**
     * Create a new event instance.
     *
     * @param $device
     */
    public function __construct($device)
    {
        $this->device = $device;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['device-channel'];
    }

    /**
     * write brief description
     * @return string
     */
    public function broadcastAs()
    {
        return 'device-notify';
    }

    /**
     * write brief description
     * @return array
     */
    public function broadcastWith()
    {
        return ['device' => $this->device->name];
    }
}