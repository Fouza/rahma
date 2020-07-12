<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function locations(){
        return $this->belongsToMany('locations','driver_id');
    }
}
