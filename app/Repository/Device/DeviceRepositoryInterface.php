<?php

namespace App\Repository\Device;

/**
 * Interface DeviceRepositoryInterface
 * @package App\Repository\Device
 */
interface DeviceRepositoryInterface
{
    /**
     * Creates New Device
     * @return mixed
     */
    public function create();

    /**
     * show all devices
     * @return mixed
     */
    public function all();

    /**
     * get device information by name
     *
     * @param $name
     *
     * @return mixed
     */
    public function get($name);
}