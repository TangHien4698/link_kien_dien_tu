<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            'old_password' => 'required',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed|between:4,32',
//            |regex:/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => __('validate-form.required'),
            'password.required' => __('validate-form.required'),
            'password.between' => __('validate-form.between'),
//            'password.regex' => __('validate-form.regex'),
            'password.confirmed' => __('validate-form.regex'),
        ];
    }
}
