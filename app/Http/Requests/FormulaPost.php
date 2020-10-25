<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaPost extends FormRequest
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
            'magnitude_id' => 'required|min:1|max:30',
            'parameters_count' => 'required|min:1|max:20',
            'formula' => 'required|min:1|max:100'
        ];
    }
}
