<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Driver;
use App\Location;
use App\Partner;
use App\Assurance;
use App\Controle;
use App\Entretien;

class Car extends Model
{
    public function driver(){
        return $this->hasOne(Driver::class);
    }

    public function partner(){
        return $this->hasOne(Partner::class);
    }

    public function locations(){
        return $this->belongsToMany('Location','car_id');
    }

    public function entretiens(){
        return $this->belongsToMany('Entretien','car_id');
    }

    public function controles(){
        return $this->belongsToMany('Controle','car_id');
    }

    public function assurances(){
        return $this->belongsToMany('Assurance','car_id');
    }

    public function getLocation(){
        return $location = Location::where('car_id',$this->id)->latest()->first();
    }

}
