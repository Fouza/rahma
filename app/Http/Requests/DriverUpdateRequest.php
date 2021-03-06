<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverUpdateRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'permis' => 'required',
            'permisFin' => 'required',
            'email' => 'email|required'
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Veuillez entrer le nom',
            'prenom.required' => 'Veuillez entrer le prénom',
            'permis.required' => 'Veuillez entrer le numéro du permis',
            'permisFin.required' => 'Veuillez entrer la date d\'expiration du permis',
            'email.required' => 'Veuillez entrer l\'email',
        ];
    }

    public function filters()
    {
        return [
            'nom' => 'trim|capitalize|escape',
            'prenom' => 'trim|capitalize|escape',
            'email' => 'trim|lowercase'
        ];
    }
}

