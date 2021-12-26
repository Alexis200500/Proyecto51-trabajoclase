<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestros extends Model
{
 protected $primaryKey = 'idmaestro';
 public $timestamps = false;
 protected $nombre;
 protected $appaterno;
 protected $apmaterno;
 protected $carrera;
 protected $email;
 protected $telefono;
 protected $horario;   
}
