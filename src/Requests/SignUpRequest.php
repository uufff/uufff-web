<?php

namespace Uufff\Auth\Requests;

use Uufff\Auth\Request;

class SignUpRequest extends Request
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
            'name' => 'required|between:2,32',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|between:5,32|confirmed',
        ];
    }

//    public function messages()
//    {
//        return [
//            'name.required' => '名称必须填写。',
//            'name.between' => '名称长度在 :min - :max 之间。',
//            'email.required' => '邮箱必须填写。',
//            'email.email' => '邮箱格式错误。',
//            'email.max' => '邮箱长度必须小于 :max 。',
//            'email.unique' => '邮箱已被使用。',
//            'password.required' => '密码必须填写。',
//            'password.between' => '密码长度 :min - :max 之间。',
//            'password.confirmed' => '两次输入密码不一致。',
//        ];
//    }
}
