<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends BaseFormRequest
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
            'photo' => 'image',
            'marque' => 'required|max:30',
            'model' => 'required|max:30',
            'capacite' => 'numeric',
            'matricule' => 'required',
            'year' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'photo.image'=> 'Format de l\'image erroné',
            'marque.required' => 'Veuillez entrer une marque',
            'model.required' => 'Veuillez entrer un modèle',
            'matricule.required' => 'Veuillez entrer un matricule',
            'capacite' => 'Capacité doit être une valeur numérique'
        ];
    }

    public function filters()
    {
        return [
            'matricule' => 'trim|uppercase',
            'marque' => 'trim|capitalize|escape',
            'model' => 'trim|capitalize|escape'
        ];
    }
}
