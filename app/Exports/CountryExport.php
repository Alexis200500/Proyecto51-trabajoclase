<?php

namespace App\Exports;

use App\Country;
use Maatwebsite\Excel\Concerns\FromCollection;

class CountryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
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
