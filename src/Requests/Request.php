<?php

namespace Uufff\Auth;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    protected $loginUser;

    public function __construct ()
    {
        $this->trimRequestData();
        $this->loginUser = \Request::user();
    }

    //删除表单提交字符串前后空格
    public function trimRequestData()
    {
        \Request::merge(array_map(function ($value) {
            if (is_string($value)) {
                return trim($value);
            } else {
                return $value;
            }
        }, \Request::all()));
    }
}
