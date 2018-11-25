<?php
namespace models;


use X\Model;
use X\validate\Required;
use X\validate\StringValidator;

/**
 * 登录表单
 * @property string username
 * @property string password
*/
class LoginForm extends Model
{
    public function attributes()
    {
        return [
            'username' => '用户名',
            'password' => '登陆密码',
        ];
    }

    public function rules()
    {
        return [
            [['username', 'password'], Required::class],
            ['username', StringValidator::class, 'min' => 5, 'max' => '20', 'message' => '用户名长度在5-20位'],
            ['password', StringValidator::class, 'min' => 6, 'max' => 12],
        ];
    }

}