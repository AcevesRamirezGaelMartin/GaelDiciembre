<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => ['required', 'string'],
            'apellido' => ['required', 'string','max:255'],
            'contrasena' => ['required', 'min:8'],
            'correo' => ['required', 'email'],
            'telefono' => ['required', 'numeric'],
            //
        ];
    }
}
