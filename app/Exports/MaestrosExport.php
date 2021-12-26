<?php

namespace App\Exports;

use App\Maestros;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaestrosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Maestros::all();
    }
}
