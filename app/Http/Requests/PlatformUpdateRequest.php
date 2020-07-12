<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlatformUpdateRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo' => 'required|image',
            'nom' => 'required'
        ];
    }

    public function messages(){
        return [
            'logo.required' => 'Veuillez importer un logo',
            'logo.image' => 'Format de l\'image erroné',
            'nom.required' => 'Veuillez enter un nom',
        ];
    }

    public function filters()
    {
        return [
            'nom' => 'trim|capitalize|escape'
        ];
    }
}
