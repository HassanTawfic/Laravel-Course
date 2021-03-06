<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
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
            'title' => ['required','min:3'],
            'description' => ['required','min:10'],
            'user_id' => ['min:1','max:10'],
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'title.min' => 'Title must exceed 3 characters',
            'description.required' => 'Description is required',
            'description.min' => 'Description must be more than 10 characters',
            'user_id.min' => 'User out of boundaries',
            'user_id.max' => 'User out of boundaries'
        ];
    }
}
