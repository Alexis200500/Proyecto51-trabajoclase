<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $fillable = ['Code','Name','Continent','Region','SurfaceArea','IndepYear','
   Population','LifeExpectancy','GNP','GNPOld','LocalName',
   'GovernmentForm','HeadOfState','Capital','Code2'];

   protected $primaryKey = 'Code';


}
