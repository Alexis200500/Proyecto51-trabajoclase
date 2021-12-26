<?php

namespace App\Exports;

use App\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class AlumnosExport2 implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function query()
    {
        return Alumnos::query()->select
        ('idalumno','nombre','appaterno')->where('carrera',1);
    }

    public function headings():array{
        return [
            'idalumno',
            'Nombre',
            'Ap. Paterno',
            'Ap. Mateno',
            'Sexo'
            
        ];
    }
}
