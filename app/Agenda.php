<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agenda";
    protected $fillable = ['tanggal','judul_agenda','informasi_tambahan', 'tanggal_dibuat', 'tanggal_diubah'];

}
