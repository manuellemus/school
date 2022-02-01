<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mat_materia extends Model
{
    protected $fillable = [
        'id','nombre'
    ];
    public function getGetNombreAttribute($key)
    {
        return is_null($this->nombre) ? '' : $this->nombre;
    }
    public function mxg_asignaciones_m()
    {
        return $this->hasMany(Mxg_materias_x_grado::class);
    }
}
