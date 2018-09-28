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
          'id_asignacion_al_gr' => 'required|numeric',
          'id_materia' => 'required|numeric',
          'examen1' => 'required|numeric',
          'examen2' => 'required|numeric',
          'examen3' => 'required|numeric',
          'ponderacion1'=>'required|numeric',
          'ponderacion2'=>'required|numeric',
          'ponderacion3'=>'required|numeric',
        ];
    }
}