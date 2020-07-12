<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
