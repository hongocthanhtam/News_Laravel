<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    // Select all of field on images table
    protected $table = 'images';
    protected $guarded 	= [];

    // Relationship: many to one
    public function posts() {
    	return $this->belongsTo('App\Posts', 'post_id', 'id');
    }
}
