<?php

namespace App\Exports;

use App\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AlumnosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alumnos::all();
    }

    public function headings():array{
        return [
            'idalumno',
            'Nombre',
            'Ap. Paterno',
            'Ap. Materno',
            'Sexo',
            'Carrera',
            'Email',
            
        ];
    }
}
