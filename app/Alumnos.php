<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = ['idalumno','nombre','appaterno','apmaterno','sexo','carrera','email'];
    protected $primaryKey = 'idalumno';
    public $timestamps = false; //que no aparezca en la BD las celdas de create y update
   
}
