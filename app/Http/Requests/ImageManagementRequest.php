<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImageManagementRequest extends BaseFormRequest
{
    function store()
    {

        return [
            'key' => ['bail', 'required'],
            'title' => ['required'],
            'image' => ['required_if:icon,null', 'mimes:jpeg,jpg,png,gif,webp,svg'],



        ];
    }

    function update()
    {

        return [
            'key' => ['nullable'],
            'title' => ['required'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png,gif,webp,svg'],
            'prvImage' => ['nullable'],

            // Rule::required_if(fn () => ($this->prvImage == null && $this->image == null))
            // [Rule::when(($this->prvImage == null && $this->image == null), 'required')]
            // [
            //     Rule::required_if(function () {

            //     if ($this->prvImage == null && $this->image == null) {

            //         return true;
            //     }
            //     return false;

            //     // return empty($this->request->get('prvImage')) && empty($this->request->get('image'));
            // })]
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

            'icon.required_without_all' => 'icon field is required when image field is empty',


        ];
    }
}
