<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Storage;
use DB;
class EmailController extends Controller
{
    public function enviare(){
        return view('vista_envio');
      }

    public function enviar(Request $req){     
        $copia = $req['copia']; 
        $asunto=$req['asunto'];
        $para = $req['dest'];
        $mensaje = $req['mensaje'];

        $archivo = $req['archivo'];
        $name = $archivo->getClientOriginalName();
        $arch = Storage::disk('local')->path($req->file('archivo')
        ->storeAs('public', $name));

        $datos = array('destinatario'=>$para, 'copia'=>$copia , 'mensaje' =>$mensaje);

        Mail::send('email',$datos,function($msj)
        use($asunto, $para, $copia, $arch){
          $msj->from("al221811729@gmail.com","Alexis Morales");
          $msj->subject($asunto);
          $msj->to($para);
          $msj->cc($copia);
          $msj->attach($arch);
        });
        echo "Email Enviado";
      }


      public function subira(Request $req){

        $archivo = $req['archivo'];
        $name = $archivo->getClientOriginalName();
        $arch = Storage::disk('local')->path($req->file('archivo')
        ->storeAs('public', $name));
        echo "$arch se copio correctamente";

      }
            //recuperar contraseñas
      public function restaurar(Request $req){
        $email = $req['email'];
        $res = DB::SELECT("SELECT * FROM usuarios  WHERE email= '$email' ");
        $asunto = "Tu contraseña se ha modificado";

        if($res !=null){
          $letras = "abcdefghijklmnopqrstwxyz0123456789";
          $nuevopw = substr(str_shuffle($letras), 0,8);

          DB::SELECT("UPDATE usuarios SET password ='$nuevopw' where email = '$email' ");

          $datos = array('destinatario'=>$email, 'nuevopw'=>$nuevopw);

          Mail::send('recupero',$datos,function($msj)
        use($asunto,$email, $nuevopw){
          $msj->from("al221811729@gmail.com","Alexis Morales");
          $msj->to($email);
          $msj->subject($asunto);
          
        });

        echo "Se ha mandado la constraseña en tu correo ";
          
        }else{
          echo 'Tu email no se encuentra registrado';
        }

      }
  
}
