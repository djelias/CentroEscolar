<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|alpha_spaces',
            'no_nie'=>'required|numeric',
            'f_nacimiento'=>'required|date',
            'direccion'=>'required|alpha_spaces',
            'telefono'=>'required|numeric|digits:8',
            'repite_grado',
            'estudio_parvularia',
            'enfermedades'=>'required|alpha_spaces',
            'nombre_madre'=>'required|alpha_spaces',
            'dui_madre'=>'required|min:10|max:10',
            'ocupacion_madre'=>'required|alpha_spaces',
            'telefono_madre'=>'required|numeric|digits:8',
            'nombre_padre'=>'required|alpha_spaces',
            'dui_padre'=>'required|min:10|max:10',
            'ocupacion_padre'=>'required|alpha_spaces',
            'telefono_padre'=>'required|numeric|digits:8',
            'vive_con'=>'required|alpha_spaces',
            'carta_compromiso',
            'conducta',
            'rendimiento',
            'nuevo_ingreso',
            'escuela_proviene',
            'municipio'=>'required|alpha_spaces',
            'observaciones',
            'quien_inscribe'=>'required|alpha_spaces',
            'estado'
        ];
    }
}
