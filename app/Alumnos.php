<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = ['nombres','apellidos','correo','no_nie','grado','t_matricula','f_nacimiento','edad'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombres', 'LIKE', "%$nombre%");
	}

}