<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $fillable = ['nombre','ponderacion','nota'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', "%$nombre%");
	}

}