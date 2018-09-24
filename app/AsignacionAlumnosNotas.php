<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionAlumnosNotas extends Model
{
    protected $fillable = ['id_asignacion','id_alumno','id_nota'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $id_alumno)
	{
		return $query->where('id_alumno', 'LIKE', "%$id_alumno%");
	}

	public function Asignaciones(){
    return $this->belongsTo('App\Asignaciones', 'id_asignacion');
}

	public function Alumnos(){
    return $this->belongsTo('App\Alumnos', 'id_alumno');
}

    public function Notas(){
    return $this->belongsTo('App\Notas', 'id_nota');
}

}