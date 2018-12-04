<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencias extends Model
{
    protected $fillable = ['id_asignaciones','id_asig_alum_gr','estado','fecha'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $id_asignaciones)
	{
		return $query->where('id_asignaciones', 'LIKE', "%$id_asignaciones%");
	}

	public function Asignaciones(){
    return $this->belongsTo('App\Asignaciones', 'id_asignaciones');
}

public function AsignacionAlumnosGrados(){
    return $this->belongsTo('App\AsignacionAlumnosGrados', 'id_asig_alum_gr');
}

}