<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = "carousels";
    protected $guarded = ['id'];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
