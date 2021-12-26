<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Maestros;
use PDF;
use Excel;
use App\Exports\MaestrosExport;

class MaestroController extends Controller
{
    public function ConsultaM()
    {   
      //  $res = DB::SELECT("SELECT * FROM maestros");

        $res = DB::SELECT("SELECT maestros.idmaestro, maestros.nombre, maestros.appaterno, maestros.apmaterno, 
                         carreras.carrera, maestros.email, maestros.telefono, maestros.horario 
                         FROM maestros,carreras WHERE maestros.idmaestro = carreras.idcarrera  ORDER BY appaterno");
        return view("Maestros.vista_consulta",['res' => $res]);
    }

    public function EXCELM(){
        $datos = "";
        return Excel::download(new MaestrosExport,'Maestros.xls');
      }

    public function PDFM(){

        $res = DB::SELECT("SELECT maestros.idmaestro, maestros.nombre, maestros.appaterno, maestros.apmaterno, 
        carreras.carrera, maestros.email, maestros.telefono, maestros.horario 
        FROM maestros,carreras WHERE maestros.idmaestro = carreras.idcarrera  ORDER BY appaterno");

        $pdf = PDF::loadView('Maestros.vista_consulta2',['res' =>$res])->setPaper('a4','landscape');
        return $pdf->download('archivo_maestros.pdf');
    }
}
