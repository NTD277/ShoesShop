<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginCustomerPost extends FormRequest
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
            'username' => 'required|max:60',
            'password' => 'required|min:8|max:60'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Tên đăng nhập không được để trống',
            'username.max' => 'Tên đăng nhập không được quá :max ký tự',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Password phải nhiều hơn :min ký tự',
            'password.max' => 'Password không được quá :max ký tự',
        ];
    }
}
