<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Galleries extends Model
{
    protected $fillable = [
        'events_id', 'name', 'start', 'end', 'total', 'note',
    ];



    function events(){
    	return $this->belongsTo(Events::class);
    }

     
}
