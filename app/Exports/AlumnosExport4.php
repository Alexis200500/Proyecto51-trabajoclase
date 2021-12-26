<?php

namespace App\Exports;

use App\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class AlumnosExport4 implements FromQuery, WithHeadings
{
    public function query()
    {
        return Alumnos::query()->select
        ('idalumno','nombre','appaterno','apmaterno','carrera','sexo')->where('sexo','M');
    }

    public function headings():array{
        return [
            'idalumno',
            'Nombre',
            'Ap. Paterno',
            'Ap. Mateno',
            'Sexo',
            'Carrera'
        ];
    }
}
