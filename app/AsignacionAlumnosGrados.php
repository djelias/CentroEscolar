<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionAlumnosGrados extends Model
{
    protected $fillable = ['id_grado','id_alumno'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $id_alumno)
	{
		return $query->where('id_alumno', 'LIKE', "%$id_alumno%");
	}

	public function Grados(){
    return $this->belongsTo('App\Grados', 'id_grado');
}

	public function Alumnos(){
    return $this->belongsTo('App\Alumnos', 'id_alumno');
}

 
}