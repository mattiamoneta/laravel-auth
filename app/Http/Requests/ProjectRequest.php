<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'nameField' => 'required|max:200',
            'descriptionField' => 'required|max:200',
            'thumbField' => 'required|max:80'
        ];
    }


    public function messages(){
        return[
            'nameField.required' => 'Il campo Project Name non può essere vuoto',
            'descriptionField.required' => 'Il Description non può essere vuoto',
            'thumbField.required' => 'Il campo Thumbnail non può essere vuoto'
        ];
    }

}
