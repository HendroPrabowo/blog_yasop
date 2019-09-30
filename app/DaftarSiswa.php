<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarSiswa extends Model
{
    protected $table = "daftar_siswa";
    protected $guarded = ['id'];
}
