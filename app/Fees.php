<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function Students(){
        return $this->belongTo('App\Student');
    }
}
