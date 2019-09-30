<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $guarded = ['id'];
    use SoftDeletes;
    // protected $dateFormat = 'U';
}
