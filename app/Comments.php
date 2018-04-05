<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    // Select all of field on comments table
    protected $table 	= 'comments';
    protected $guarded 	= [];

    // Relationship: many to one
    public function users() {
    	return $this->belongsTo('App\Users','user_id','id');
    }

    // Relationship: many to one
    public function posts() {
    	return $this->belongsTo('App\Posts', 'post_id', 'id');
    }
}
