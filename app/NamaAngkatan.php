<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NamaAngkatan extends Model
{
    protected $table = "nama_angkatan";
    protected $guarded = ['id'];
    public $timestamps = false;

    public function alumni(){
        return $this->hasMany('App\Alumni');
    }
}
