<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Validar las normas de entrada para registrar un usuario
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'telefono' => 'required|string|max:10',
            'correo' => 'required|string|email|max:70',
            'clave' => 'required|string|max:70',
            'documento' => 'required|string|max:15',
            'fecha_nacimiento' => 'required|date',
        ];
    }
}
