<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promedios extends Model
{
    protected $fillable = ['id_asignaciones','id_asignacionAlumnosGrados','id_asignacionMateriasGrados','id_examenes','trimestre1','trimestre2','trimestre3','prom_final','anio'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $id_examenes)
	{
		return $query->where('id_examenes', 'LIKE', "%$id_examenes%");
	}

	public function Asignaciones(){
    return $this->belongsTo('App\Asignaciones', 'id_asignaciones');
}

public function AsignacionMateriasGrados(){
    return $this->belongsTo('App\AsignacionMateriasGrados', 'id_asignacionMateriasGrados');
}

public function AsignacionAlumnosGrados(){
    return $this->belongsTo('App\AsignacionAlumnosGrados', 'id_asignacionAlumnosGrados');
}

public function Examenes(){
    return $this->belongsTo('App\Examenes', 'id_examenes');
}

}