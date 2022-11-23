<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>['required','regex:/[a-zA-Z]/','unique:products'],
            'category'=>'required',
            'product_img'=>'required',
            'price'=>['required'],
            'product_quantity'=>['required','regex:/[0-9]/'],
            'product_dsc'=>'required'
        ];
    }
    public function messages()
    {
        return [
        
            'name.required' => 'Product Name is required!',
            'name.regex' => 'Please Provide a valid product name!',
            'name.unique'=>'Product already exist',
            'category.required' => 'Category  is required!',
            'product_img.required' => 'Prouct image  is required!',
            'price.required' => 'Price   is required!',
          
            'product_quantity.required' => 'quantity   is required!',
            'product_quantity.regex' => 'Please Put a valid quantity !',
            'product_dsc.required'=>'Description is required'







        ];
    }
}
