<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => ['required','min:3','unique:App\Models\Blog,title'],
            'description' => ['required','min:10']
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.min' => 'Title must exceed 3 characters',
            'title.unique' => 'Title must be unique',
            'description.required' => 'A description is required',
            'description.min' => 'description must be more than 10 characters'
        ];
    }
}
