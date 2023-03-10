<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User_Request extends FormRequest
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
            'name'=>'required|string|min:3|max:12',
            'email'=>'required|string|unique:users|email|min:5',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'gender'=>'required',
        ];
    }
}
