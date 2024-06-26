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
            'sku' => 'required',
            'slug' => 'required',
            'discount' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'product_name' => 'required',
            'product_image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category_id' => 'Category field is required'
        ];
    }
}
