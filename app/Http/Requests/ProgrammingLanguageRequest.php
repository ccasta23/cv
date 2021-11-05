<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgrammingLanguageRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required',
            'release_year' => ['required','integer'],
            'actual_version' => 'required|max:10',
            //'image' => ['image']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre debe ser llenado',
            'actual_version.required' => 'La versión actual no puede estar vacía (Busque en google)'
        ];
    }
}
