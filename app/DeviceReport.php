<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceReport extends Model
{
    //
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
