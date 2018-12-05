<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    protected $fillable = ['id_asignaciones','id_asignacionAlumnosGrados','asignacionMateriasGrados','fecha','estado'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $fecha)
	{
		return $query->where('fecha', 'LIKE', "%$fecha%");
	}

	public function asignaciones(){
    return $this->belongsTo('App\Asignaciones', 'id_asignaciones');
	}

	public function asignacionAlumnosGrados(){
    return $this->belongsTo('App\AsignacionAlumnosGrados', 'id_asignacionAlumnosGrados');
	}

	public function asignacionMateriasGrados(){
    return $this->belongsTo('App\AsignacionMateriasGrados', 'id_asignacionMateriasGrados');
	}
}