<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $fillable = ['nombre','fecha','descripcion','lugar'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', "%$nombre%");
	}


}