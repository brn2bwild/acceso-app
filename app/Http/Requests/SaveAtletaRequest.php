<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveAtletaRequest extends FormRequest
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
            'Nombre' => ['required', 'max:100'],
            'apellidoPaterno' => ['required', 'max:100'],
            'apellidoMaterno' => ['required', 'max:100'],
            'Correo' => 'nullable',
            'Foto' => ['image', 'mimes:jpeg,png,jpg', 'max:1014'],
            // 'urlFoto' => ['required'],
            'RFID' => ['required', 'max:10'],
        ];
    }

    public function setDirFoto($value)
    {
        $this->attributes()['Foto'] = strtolower($value);
    }
}