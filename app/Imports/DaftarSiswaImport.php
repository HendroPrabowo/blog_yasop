<?php

namespace App\Imports;

use App\DaftarSiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class DaftarSiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DaftarSiswa([
            'no_induk' => $row[1],
            'nama' => $row[2],
        ]);
    }
}
