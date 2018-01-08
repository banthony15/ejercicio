<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

	protected $table = 'peoples';
	
    protected $fillable = [
    	'cedula','credencial','name_1','name_2','lastname_1','lastname_2','sexo_id','status_id',
    ];

    public function Reference()

    {

    	return $this->belongsTo('App\Reference');

    }
}
