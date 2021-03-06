<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Timestamps
    public $timestamps=true;
    
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
