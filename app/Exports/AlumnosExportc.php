<?php

namespace App\Exports;

use App\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


class AlumnosExportc implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    protected $crit;

    function __construct($crit){
        $this->crit = $crit;
    }


    public function query()
    {
        return Alumnos::query()->select
        ('idalumno','nombre','appaterno')
        ->where('nombre', 'like', "%$this->crit%")
        ->orWhere('appaterno', 'like', "%$this->crit%")
        ->orWhere('apmaterno', 'like', "%$this->crit%")
        ->orWhere('email', 'like', "%$this->crit%");
    }
    public function headings(): array{
        return [
            'idalumno',
            'nombre',
            'appaterno',
           
        ];
    }

}
