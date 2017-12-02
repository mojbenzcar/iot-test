<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //

    public function history()
    {
        return $this->hasMany(DeviceReport::class)->orderBy('created_at', 'desc');
    }
}
