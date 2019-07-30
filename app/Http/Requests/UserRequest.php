<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'userName' => 'required|unique:user,username',
            'password' => 'required',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'Please Enter UserName',
            'userName.unique' => 'User is Exist',
            'password.required' => 'Please Enter password',
            'email.required' => 'Please enter Email',
            // 'email.regex' => 'Email Error Syntax'

        ];
    }
}
