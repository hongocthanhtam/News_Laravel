<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Select all of field on categories table
    protected $table 	= 'categories';
    protected $guarded 	= [];

    // Relationship: one to many
    public function posts() {
    	return $this->hasMany('App\Posts','post_type','id');
    }
}
