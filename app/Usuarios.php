<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $primaryKey = 'idusuario';
 public $timestamps = false;
 protected $usuario;
 protected $password;
 protected $email;   
}
