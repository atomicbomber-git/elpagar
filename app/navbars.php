<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class navbars extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\categorys','id_categorys');
    }

    public function navbar()
    {
    	return $this->hasOne('App\navbars','parent');
    }

    public function page()
    {
    	return $this->belongsTo('App\pages','id_pages');
    }

    public function index($value='')
    {
    	return $this->belongsTo('App\navbars','parent','id');
    }
}
