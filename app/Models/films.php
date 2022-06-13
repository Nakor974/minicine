<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class films extends Model
{
    use HasFactory;


public function salles()
    {
    return $this->belongsTo(salles::class,'id_salles');
}

public function réalisateurs (){
    return $this->belongsTo(réalisateurs::class,'id_real');
}


}
