<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_name'=>['required','unique:categories','string'],
            'cat_desc'=>'required'
        
        ];
    }
    public function messages()
    {
        return [
            'category_name.required' => 'Category Name is required!',
            'category_name.unique' => 'Category name has already been added',
            'cat_desc.required' => 'Description is required!'
        ];
    }
}
