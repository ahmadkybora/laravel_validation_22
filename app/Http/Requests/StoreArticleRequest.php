<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:12'],
            'desc' => ['required', 'min:3', 'max:12'],
            'img' => ['required', 'mimes:jpeg, jpg, png', 'max:10000']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => ['your data is required'],
            'desc.required' => ['your data is incorrect']
        ];
    }
}
