<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    // Select all of field on reactions table
    protected $table 	= 'reactions';
    protected $guarded 	= [];

    // Relationship: one to one
    public function posts() {
    	return $this->belongsTo('App\Posts','post_id','id');
    }
}
