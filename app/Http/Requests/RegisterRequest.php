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
            'username'  => 'required|string|min:3|max:50|unique:users,username',
            'phone'     => 'required|digits_between:10,11|unique:users,phone',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6',
            'province'  => 'required|exists:provinces,id',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required'  => 'Họ và tên không được để trống.',
            'username.required'  => 'Tên đăng nhập không được để trống.',
            'username.unique'    => 'Tên đăng nhập đã tồn tại.',
            'phone.required'     => 'Số điện thoại không được để trống.',
            'phone.unique'       => 'Số điện thoại đã được sử dụng.',
            'email.required'     => 'Email không được để trống.',
            'email.email'        => 'Email không hợp lệ.',
            'email.unique'       => 'Email đã tồn tại.',
            'password.required'  => 'Mật khẩu không được để trống.',
            'password.min'       => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'province.required'  => 'Vui lòng chọn khu vực.',
            'province.exists'    => 'Khu vực không hợp lệ.',
            'g-recaptcha-response.required' => 'Vui lòng xác nhận captcha.',
            'g-recaptcha-response.captcha' => 'Captcha không hợp lệ, vui lòng thử lại.',
        ];
    }
}
