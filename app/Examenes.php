<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examenes extends Model
{
    protected $fillable = ['id_asignacion_al_gr','id_materia','examen1','examen2','examen3','actividad1','actividad2','trimestre'];
    protected $guarded = ['promedio'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $examen1)
	{
		return $query->where('examen1', 'LIKE', "%$examen1%");
	}

	public function materias(){
    return $this->belongsTo('App\Materias', 'id_materia');
}

	public function asignacionAlumnosGrados(){
    return $this->belongsTo('App\AsignacionAlumnosGrados', 'id_asignacion_al_gr');
}
}