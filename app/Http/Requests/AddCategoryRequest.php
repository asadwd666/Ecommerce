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
            'category_name'=>['required','unique:categories','regex:/^[a-zA-Z]+$/'],
            'cat_desc'=>'required',
          
        
        ];
    }
    public function messages()
    {
        return [
            'category_name.regex' => 'Please provide a valid Category Name!',
            'category_name.required' => 'Category Name is required!',
            'category_name.unique' => 'Category name has already been added',
            'cat_desc.required' => 'Description is required!',
            // 'product_name.required' => 'Product Name is required!',
            // 'category.required' => 'Category  is required!',
            // 'product_img.required' => 'Prouct image  is required!',
            // 'price.required' => 'Price   is required!',
            // 'product_quantity.required' => 'quantity   is required!',
            // 'product_dsc.required'=>'Description is required'







        ];
    }
}
