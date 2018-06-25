<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $fillable = ['nombres','apellidos','no_dui','no_escalafon','telefono','direccion','correo'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombres', 'LIKE', "%$nombre%");
	}

}