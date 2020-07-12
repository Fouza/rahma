<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Entretien extends Model
{
    public function car(){
        return $this->belongsTo('Car');
    }

}
