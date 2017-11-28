<?php namespace App\Http\Controllers;

use App\Repository\Device\DeviceRepositoryInterface;

class HomeController extends Controller
{
    protected $deviceRepository;

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
        $devices = $this->deviceRepository->all();

        return view('home.index', compact('devices'));
    }
}