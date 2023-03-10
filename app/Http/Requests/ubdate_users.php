<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ubdate_users extends FormRequest
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

            return array_merge(User_Request::rules(),[
                'id'=>'required|exists:users,id'
            ]);

    }
}
