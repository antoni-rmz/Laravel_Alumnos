<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlumnosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'codigo' => ['required', 'numeric', Rule::unique('alumnos')->ignore($this->alumno)],
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'email', 'max:255', Rule::unique('alumnos')->ignore($this->alumno)],
            'fecha_nacimiento' => ['required', 'date'],
            'sexo' => [
                'required',
                'string',
                Rule::in(['masculino', 'femenino', 'prefiero_no_decirlo']),
            ],
            'carrera' => ['required', 'string', 'max:100'],
        ];
    }
    public function messages()
    {
        return [
            'codigo.required' => 'El código es obligatorio.',
            'codigo.unique' => 'El código ya está en uso.',
            'codigo.numeric' => 'El código debe ser un número.',
            'codigo.max' => 'El código no debe ser mayor a 10000.',
            'nombre.required' => 'El nombre es obligatorio.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección válida.',
            'correo.unique' => 'El correo ya está en uso.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es una fecha válida.',
            'sexo.required' => 'El sexo es obligatorio.',
            'sexo.in' => 'El sexo debe ser Masculino, Femenino o Prefiero no decirlo.',
            'carrera.required' => 'La carrera es obligatoria.',
        ];
    }
}
