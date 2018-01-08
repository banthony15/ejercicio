<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    
    public function People(){


        return $this->hasMany('App\People');

    }
}
