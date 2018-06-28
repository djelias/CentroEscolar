<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grados extends Model
{
    protected $fillable = ['codigo','id_docente','id_secretaria','seccion','capacidad'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('codigo', 'LIKE', "%$nombre%");
	}
}
