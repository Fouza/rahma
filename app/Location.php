<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function cars(){
        return $this->belongsToMany('cars');
    }

    public function drivers(){
        return $this->belongsToMany('drivers');
    }

    public function getDriver(){
        return $driver = Driver::find($this->driver_id);
    }

    public function getCar(){
        return $car = Car::find($this->car_id);
    }
}
