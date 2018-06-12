<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function fees(){
        return $this->hasMany('App\Fees');
    }
}
