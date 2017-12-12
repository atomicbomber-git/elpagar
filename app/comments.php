<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{

    public function post()
    {
    	return $this->belongsTo('App\posts','id_posts');
    }

    public function page()
    {
        return $this->belongsTo('App\pages','id_pages');
    }

    public function comment()
    {
    	return $this->hasOne('App\posts','id_posts','id');
    }

    public function comments()
    {
    	return $this->belongsTo('App\posts','id_posts');
    }
}
