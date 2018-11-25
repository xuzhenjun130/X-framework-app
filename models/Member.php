<?php

namespace models;
use X\validate\Regular;
use X\validate\Required;
use X\validate\StringValidator;
use X\validate\Unique;
use X\X;

/**
 * Class Member
 * @property string id
 * @property integer phone
 * @property string username
 * @property string password
 * @property string created_at
 */
class Member extends \X\Model
{
    public function attributes()
    {
        return [
            'id' => 'id',
            'phone' => '电话',
            'username' => '用户名',
            'password' => '登陆密码',
            'created_at' => '创建时间',
        ];
    }

    public function rules()
    {
        return [
            [['username','phone', 'password'], Required::class],
            ['username', StringValidator::class, 'min' => 5, 'max' => '20', 'message' => '用户名长度在5-20位'],
            [['username','phone'], Unique::class],
            ['phone',Regular::class, 'pattern'=>'/^1[34578]\d{9}$/'],
            ['password', StringValidator::class, 'min' => 6, 'max' => 12],
        ];
    }

    public function beforeSave()
    {
        if (strlen($this->password)) {
            $this->password = X::app()->user->passwordHash($this->password);
        }
        $this->created_at = date('Y-m-d H:m:s');
        return true;
    }
}