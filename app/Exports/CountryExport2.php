<?php

namespace App\Exports;

use App\Country;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class CountryExport2 implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    public function query()
    {
        return Country::query()->select
        ('Name','Continent','Region','Population','GovernmentForm')->where('Continent','Africa');
    }

    public function  headings():array{
        return[
            'Pais',
            'Continente',
            'Region',
            'Población',
            'Forma de Gobernación'
        ];
    }
}
