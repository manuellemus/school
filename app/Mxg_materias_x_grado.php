<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mxg_materias_x_grado extends Model
{
    protected $fillable = [
        'id','id_grado', 'id_materia'
    ];

    public function materia()
    {
        return $this->belongsTo(Mat_materia::class, 'id_materia');
    }
    public function grado()
    {
        return $this->belongsTo(Grd_grado::class, 'id_grado');
    }
    
}
