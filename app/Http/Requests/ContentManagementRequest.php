<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentManagementRequest extends BaseFormRequest
{
    public function store()
    {
        return [

            'key' => ['bail', 'required'],
            'title' => ['required'],
            'value' => ['required'],

        ];
    }
    public function update()
    {
        return [
            'key' => ['nullable'],
            'value' => ['required'],
            'title' => ['required'],
        ];
    }
    // /**
    //  * Get the error messages for the defined validation rules.
    //  *
    //  * @return array
    //  */
    public function messages()
    {
        return [

            'value.required' => 'details field is required',

        ];
    }
}
