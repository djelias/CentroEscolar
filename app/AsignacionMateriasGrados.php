<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionMateriasGrados extends Model
{
    protected $fillable = ['id_grado','id_materia'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $id_grado)
	{
		return $query->where('id_grado', 'LIKE', "%$id_grado%");
	}

	public function Grados(){
    return $this->belongsTo('App\Grados', 'id_grado');
}

	public function Materias(){
    return $this->belongsTo('App\Materias', 'id_materia');
}

 
}