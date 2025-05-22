<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Cho phép tất cả các request
    }

    public function rules()
    {
        return [
            'fullname'  => 'required|string|max:255',
            'username'  => [
                'required',
                'string',
                'min:3',
                'max:50',
                'unique:users,username',
                'regex:/^[a-z0-9]+$/',
            ],
            'phone'     => 'required|digits_between:10,11|unique:users,phone',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6',
            'province'  => 'required|exists:provinces,id',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return array_merge(__('request.messages'), [
            'username.regex' => 'Tên đăng nhập chỉ được chứa chữ cái, số. Ví dụ: fasthotel1, fasthotel2 .'
        ]);
    }

    public function attributes()
    {
        return [
            'fullname'  => 'Họ và tên',
            'username'  => 'Tên đăng nhập',
            'phone'     => 'Số điện thoại',
            'email'     => 'Email',
            'password'  => 'Mật khẩu',
            'province'  => 'Tỉnh/thành phố',
            'g-recaptcha-response' => 'Mã xác thực captcha',
        ];
    }
}
