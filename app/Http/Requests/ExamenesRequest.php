<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamenesRequest extends FormRequest
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
          'id_asignacion_al_gr',
          'examen1',
          'examen2',
          'examen3',
          'actividad1',
          'actividad2',
          'trimestre',
          'promedio',
        ];
    }
}