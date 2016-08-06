<?php

namespace Uufff\Auth\Controllers;

use Uufff\Auth\Controllers\Controller;
use Uufff\Auth\Requests\SignUpRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class AuthController extends Controller
{
    use ThrottlesLogins;

    protected $redirectTo = '/';

    public function __construct()
    {
        parent::__construct();
    }

    //注册视图
    public function getSignUp()
    {
        return view('auth.sign_up');
    }

    //注册用户
    public function postSignUp(SignUpRequest $request)
    {
        dd(1);
    }

    //登陆视图
    public function getLogin()
    {
        return view('auth.login');
    }

    //用户登陆
    public function postLogin()
    {

    }

    //用户退出登陆
    public function getSignOut()
    {

    }

    //重置密码视图
    public function getReset()
    {

    }

    //重置密码
    public function postReset()
    {

    }

    //发送重置密码提示到邮箱
    public function postResetEmail()
    {

    }

    //创建重置密码令牌
    protected function createResetToken()
    {

    }

    //验证重置令牌
    protected function checkResetToken()
    {

    }

    //重置密码
    protected function resetPassword()
    {

    }
}
