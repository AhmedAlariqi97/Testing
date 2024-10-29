<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SEOManagementRequest extends  BaseFormRequest
{
    public function store()
    {
        return [
            'title' => ['bail', 'required'],
            'meta' => ['required'],
            'keywords' => ['nullable'],
            // 'page_id' => ['required', 'exists:template_management,id', 'unique:seo_management,page_id'],


        ];
    }


    public function update()
    {

        return [
            'title' => ['bail', 'required'],
            'meta' => ['required'],
            'keywords' => ['nullable'],
            // 'page_id' => ['required'],

        ];
    }

    // 'page_id' => 'required|unique:seo_management,page_id,' . request('page_id')


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Title cannot be empty',
            'meta.required' => 'Meta cannot be empty',
            // 'page_id.required' => 'Page cannot be empty',
            // 'page_id.unique' => 'This page already has SEO ',

        ];
    }
}
