<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Table;

class Post extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
