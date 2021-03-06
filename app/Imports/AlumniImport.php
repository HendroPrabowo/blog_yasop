<?php

namespace App\Imports;

use App\Alumni;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumniImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumni([
            'nama' => $row[1],
            'nama_angkatan' => $row[2]
        ]);
    }
}
