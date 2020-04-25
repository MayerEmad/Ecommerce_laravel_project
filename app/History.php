<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = ['user_id'];
}
