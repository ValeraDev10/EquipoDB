<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiposmedicos extends Model
{
    use HasFactory;


            /*public function Hojadevidas()
            {
                return $this->hasMany('App\Models\Hojadvida', 'Equiposmedicos','id');

            }*/

            public function hojadvida1()
            {
                return $this->hasOne('App\Models\Hojadvida', 'idEquipo','id');

            }




}
