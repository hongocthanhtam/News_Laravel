<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // Select all of field on posts table
    protected $table 	= 'posts';
    protected $guarded 	= [];

    // Relationship: many to one
    public function categories() {
    	return $this->belongsTo('App\Categories','post_type','id');
    }

    // Relationship: many to one
    public function user() {
    	return $this->belongsTo('App\Users','user_id','id');
    }

    // Relationship: one to one
    public function post_details() {
    	return $this->hasOne('App\Post_Details', 'post_id', 'id');
    }

    // Relationship: one to one
    public function reactions() {
    	return $this->hasOne('App\Reactions','post_id','id');
    }

    // Relationship: one to many
    public function comments() {
        return $this->hasMany('App\Comments', 'post_id', 'id');
    }

    // Relationship: one to many
    public function images() {
    	return $this->hasMany('App\Images', 'post_id', 'id');
    }
}
