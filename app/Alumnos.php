<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = ['nombre','no_nie','f_nacimiento','direccion','telefono','repite_grado','estudio_parvularia','enfermedades','nombre_madre','dui_madre','ocupacion_madre','telefono_madre','nombre_padre','dui_padre','ocupacion_padre','telefono_padre','vive_con','carta_compromiso','conducta','rendimiento','nuevo_ingreso','escuela_proviene','municipio','observaciones','quien_inscribe','estado'];
    protected $guarded = [];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', "%$nombre%");
	}

}