<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullname' => 'required|alpha|min:3|max:30',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|min:10|max:50',
            'password' => 'required|min:8|max:20|regex:/^[\w-]*$/',

        ];
    }

    public function messages()
    {
        return [
            'email.regex' => 'email must be contain @',
            'email.max' => 'Email length should be maximum 50 chararcters',
            'password.max' => 'Password at maximum 20 characters',
            'password.regex' => 'password should be alphanumeric',

        ];
    }
}
