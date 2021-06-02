<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";
    protected $fillable = ['artikel_id','judul_artikel','konten','kategori','gambar', 'tag', 'tanggal_dibuat', 'tanggal_diubah'];

}
