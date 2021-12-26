<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumnos;
use PDF;
use Excel;
use App\Exports\AlumnosExport;
use App\Exports\AlumnosExport2;
use App\Exports\AlumnosExport3;
use App\Exports\AlumnosExport4;
use App\Exports\AlumnosExportc;
use App\Imports\AlumnosImport;
use Mail;
class AlumnoControlador extends Controller

{
  public function ver()
  {
    return view('vista_alumnos');
  }
  public function guardar(Request $req){
    $nombre = $req['nombre'];
    $appaterno = $req['appaterno'];
    $apmaterno = $req['apmaterno'];
    $sexo = $req['sexo'];
    $carrera = $req['carrera'];
    $email = $req['email'];
  /*  DB::select("INSERT INTO alumnos (nombre, appaterno,apmaterno,sexo,carrera,email) VALUES('$nombre','$appaterno','$apmaterno','$sexo',$carrera,'$email')");*/

  $alu = new Alumnos();
  $alu->nombre    =$nombre;
  $alu->appaterno =$appaterno;
  $alu->apmaterno =$apmaterno;
  $alu->sexo      =$sexo;
  $alu->carrera   =$carrera;
  $alu->email     =$email;
  $alu->save();

    echo "Registro Guardado correctamente \n";
    echo $nombre."/".$appaterno."/".$apmaterno."/".$sexo."/".$carrera."/".$email;
  }

  public function consulta(Request $req)
  {
    $crit = $req['criterio'];

    $res = DB::SELECT("SELECT Alumnos.idalumno, Alumnos.nombre, Alumnos.appaterno, Alumnos.apmaterno, carreras.carrera, Alumnos.sexo,
Alumnos.email FROM alumnos, carreras WHERE Alumnos.carrera = Carreras.idCarrera AND (nombre LIKE '%$crit%' OR appaterno LIKE '%$crit%' OR apmaterno LIKE '%$crit%'
OR email LIKE '%$crit%')
ORDER BY appaterno");
  //  print_r($res);
return view ("vista_consulta",['res'=>$res, 'crit'=>$crit]);
  }

  public function consulta2(Request $req)
  {
    $carr = $req['carrera'];

    $res = DB::SELECT("SELECT Alumnos.idalumno, Alumnos.nombre, Alumnos.appaterno,Alumnos.apmaterno, carreras.carrera,Alumnos.sexo,
Alumnos.email FROM alumnos, carreras WHERE Alumnos.carrera = Carreras.idCarrera AND Alumnos.carrera = $carr
ORDER BY appaterno");
  //  print_r($res);
return view ("vista_consulta",['res'=>$res, 'carr'=>$carr]);
  }

  public function pdf(Request $req){
  // generar pdf con el comando "composer require barryvdh/laravel-dompdf"

  $crit = $req['crit'];

    $res = DB::SELECT("SELECT Alumnos.idalumno,Alumnos.nombre, Alumnos.appaterno, Alumnos.apmaterno, carreras.carrera,Alumnos.sexo,
                       Alumnos.email FROM alumnos, carreras WHERE Alumnos.carrera = Carreras.idCarrera
                       AND (nombre LIKE '%$crit%' OR appaterno LIKE '%$crit%' OR apmaterno LIKE '%$crit%'
                       OR email LIKE '%$crit%')
                       ORDER BY appaterno");
   // a4 es el tipo de hoja
    $pdf = PDF::loadView('vista_consulta2',['res' =>$res])->setPaper('a4','landscape');
    return $pdf->download('archivo.pdf');
  }

  
  public function excel(){
    //$datos = "";
    return Excel::download(new AlumnosExport2,'alumnos2.xls');
  }

  public function excel2(){
    
    return Excel::download(new AlumnosExport2,'alumnos2.xls');
  }

  public function sexof(){
    
    return Excel::download(new AlumnosExport3,'alumnos_sexof.xls');
  }
  
  public function sexom(){
    
    return Excel::download(new AlumnosExport4,'alumnos_sexoM.xls');
  }

  public function excelc(Request $req)
  {
    return Excel::download(new AlumnosExportc($req->crit), 'alumnosc.xls');
  }

  function importar(Request $request)
  {
    // php artisan make:import AlumnosImport --model=Alumnos hacer una importacion 
    $this->validate($request,[
      'archivo'=>'required|mimes:xls,xlsx'
    ]);
    Excel::import(new AlumnosImport,$request->archivo);
    return redirect()->route('consulta');
  }

  // public function enviar(){
  //   $asunto="Asunto del correo";
  //   $para = "al221811729@gmail.com";

  //   $datos = array('destinatario'=>"Alexis");

  //   Mail::send('email',$datos,function($msj)
  //   use($asunto, $para){
  //     $msj->from("al221811729@gmail.com","Alexis Morales");
  //     $msj->subject($asunto);
  //     $msj->to($para);
  //   });
  //   echo "Email Enviado";
  // }

  // public function enviare(){
  //   return view('vista_envio');
  // }

}