<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginBackendExampleRequest extends FormRequest
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
            'user'=> 'required|email',
            'Password'=>'required',
        ];
    }

    public function messages()
    {
        $messages =[
            'user.required'=>'Email không đúng!',
            'Password.required'=>'Yêu cầu nhập mật khẩu!!!',
        ];

        return $messages;

    }
}
