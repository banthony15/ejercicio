<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{

	protected $table = 'rferences';

	protected $fillable = [

		'id', 'descripcion', 'references_id',
	];
    
    public function People(){


       	 // return $this->hasMany('App\People', 'status_id', 'id');

    }
}
