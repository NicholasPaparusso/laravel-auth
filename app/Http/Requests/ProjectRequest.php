<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|max:100|min:3',
            'client_name' => 'required|max:100|min:3',
            'cover_image' => 'required|max:255|min:10',
            'summary' => 'required|max:1000',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Il nome del progetto è un campo obbligatorio',
            'name.max' => 'Il nome del progetto può avere massimo :max caratteri',
            'name.min' => 'Il nome del progetto può avere massimo :min caratteri',

            'client_name.required' => 'Il nome cliente è un campo obbligatorio',
            'client_name.max' => 'Il nome cliente può avere massimo :max caratteri',
            'client_name.min' => 'Il nome cliente può avere massimo :min caratteri',

            'cover_image.required' => 'L\'immagine  è un campo obbligatorio',
            'cover_image.max' => 'L\'url può avere massimo :max caratteri ',
            'cover_image.min' => 'L\'url può avere massimo :min caratteri ',

            'summary.required' => 'Il sommario  è un campo obbligatorio',
            'summary.max' => 'Il sommario può avere massimo :max caratteri',
        ];
    }

}
