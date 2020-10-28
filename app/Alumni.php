<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = "alumni";
    protected $guarded = ['id'];
    public $timestamps = false;

    public function angkatan() {
        return $this->belongsTo('App\NamaAngkatan', 'nama_angkatan_id');
    }
}
