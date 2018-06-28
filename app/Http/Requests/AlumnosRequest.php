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
            'nombres'=>'required|alpha_spaces',
            'apellidos'=>'required|alpha_spaces',
            'correo'=>'required|email',
            'no_nie'=>'required|numeric|min:7',
            'grado'=>'required',
            't_matricula'=>'required',
            'f_nacimiento'=>'required|date',
            'edad'=>'required|numeric'
        ];
    }
}
