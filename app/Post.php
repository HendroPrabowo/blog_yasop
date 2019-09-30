<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = "post";
    protected $guarded = ['id'];
    use SoftDeletes;
    // protected $dateFormat = 'U';

    // Relation
    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
}
