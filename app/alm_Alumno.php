<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alm_Alumno extends Model
{
    protected $fillable = [
        'id','id_grado','codigo','nombre','sexo','edad','observacion',
    ];

    public function getGetExcerptAttribute($key)
    {
        return substr($this->observacion, 0, 40) . '...';
    }
    public function grado()
    {
        return $this->belongsTo(Grd_grado::class, 'id_grado');
    }
}
