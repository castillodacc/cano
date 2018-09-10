<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Gallerys extends Model
{
    protected $fillable = [
        'events_id', 'name', 'start', 'end', 'note'
    ];



    function events(){
    	return $this->belongsTo(Events::class);
    }
}
