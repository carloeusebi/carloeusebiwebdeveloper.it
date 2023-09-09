<?php

namespace App\Http\Requests\Dsp;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'tag' => 'required|max:80|string',
            'color' => 'required|regex:^#([A-Fa-f0-9]{6})^'
        ];
    }
}
