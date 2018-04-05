<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // Select all of field on users table
    protected $table 	= 'users';
    protected $guarded 	= [];

    // Relationship: one to many
    public function posts() {
    	return $this->hasMany('App\Posts','user_id','id');
    }

    // Relationship: one to many
    public function comments() {
    	return $this->hasMany('App\Comments','user_id','id');
    }
}
