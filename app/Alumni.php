<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = "alumni";
    protected $fillable = ['nama_alumni','kutipan','angkatan_asrama','detil_kampus','gambar', 'tanggal_dibuat', 'tanggal_diubah'];

}
