<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Details extends Model
{
    // Select all of field on post_details table
    protected $table 	= 'post_details';
    protected $guarded 	= [];

    // Relationship: one to one
    public function posts() {
    	return $this->belongsTo('App\Posts', 'post_id', 'id');
    }
}
