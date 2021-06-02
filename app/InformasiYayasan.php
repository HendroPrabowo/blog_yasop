<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiYayasan extends Model
{
    protected $table = "informasi_yayasan";
    protected $fillable = ['kategori','konten','tanggal_dibuat', 'tanggal_diubah'];
}
