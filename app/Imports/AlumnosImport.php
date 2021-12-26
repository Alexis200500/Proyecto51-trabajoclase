<?php

namespace App\Imports;

use App\Alumnos;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumnosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumnos([

            'nombre'     => $row[0],
            'appaterno'  => $row[1],
            'apmaterno'  => $row[2],
            'sexo'       => $row[3],        
            'carrera'    => $row[4],
            'email'      => $row[5],

        ]);
    }
}
