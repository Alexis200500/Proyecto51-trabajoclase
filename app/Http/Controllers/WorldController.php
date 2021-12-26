<?php

namespace App\Http\Controllers;
use PDF;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Country;
use App\Exports\CountryExport;
use App\Exports\CountryExport2;

class WorldController extends Controller
{
    public function consultaexamen(Request $req)
    {
        $res = DB::SELECT("SELECT * FROM Countries WHERE Continent='Africa'");

        return view("Examen.country",['res' => $res]);
    }

    public function pdfexamen(Request $req){
        $res = DB::SELECT("SELECT * FROM Countries WHERE Continent='Africa'");

        $pdf = PDF::loadView('Examen.pdfexamen',['res' => $res]);
        return $pdf->download('country.pdf');
    }

    public function excelexamen(){
        
        return Excel::download(new CountryExport2,'pais.xls');
    }




    
}
