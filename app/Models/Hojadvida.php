<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hojadvida extends Model
{
    use HasFactory;

    public function equipomedico1()
            {
                return $this->belongsTo('App\Models\Equiposmedicos', 'idEquipo','id');

            }
}
