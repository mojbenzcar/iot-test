<?php

namespace App\Repository\Device;

use App\Device;
use Carbon\Carbon;
use Faker\Generator as Faker;

/**
 * Class DeviceRepository
 * @package App\Repository\Device
 */
class DeviceRepository implements DeviceRepositoryInterface
{
    private $faker;

    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }

    /**
     * Creates New Device
     * @return mixed
     */
    public function create()
    {
        try {
            $device       = new Device();
            $device->name = $this->faker->uuid;
            $device->user = $this->faker->email;
            if (\Request::has("start")) {
                $device->status     = config('device.status.on');
                $device->start_time = Carbon::now()->toDateTimeString();
            }

            $device->save();

            return $device;
        } catch (\Exception $e) {
            \Log::error('Error adding device.');
        }

        return false;
    }

    /**
     * show all devices
     * @return mixed
     */
    public function all()
    {
        return Device::orderBy('created_at', 'desc')->get();
    }

    public function get($name)
    {
        return Device::where('name', $name)->first();
    }
}