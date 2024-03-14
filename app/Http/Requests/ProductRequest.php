<?php

namespace App\Http\Requests;

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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {   
        return [
            'name' => 'required|string|unique:products,name',
            'product_code' => 'required|Unique:products,product_code',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'discription' => 'required|string',
            'release_date' => 'required|'
            
        ];
    }
}
