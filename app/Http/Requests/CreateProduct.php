<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProduct extends FormRequest
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
            'name' => 'required|string|min:5',
            'category_id' => 'required',
            'price' => 'nullable|regex:/^\d+(\.\d{1,2})?/',
            'specifications' => 'nullable|string|max:200',
            'description' => 'nullable|string|max:500',
            'pro_rewrite' => 'nullable|string',
        ];
    }
}
