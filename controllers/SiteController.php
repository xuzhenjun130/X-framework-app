<?php
namespace controllers;

use models\LoginForm;
use models\Member;
use X\Controller;
use X\X;

/**
 * Created by PhpStorm.
 * User: sherman
 * Date: 2018/11/22
 * Time: 23:08
 */
class SiteController extends Controller
{

    public $layout = "main";

    /***
     * 首页
     * @return string
     */
    public function home(){
        return  $this->render('home');
    }

    /**
     * 传参快捷方法
     * @param $a
     * @param $b
     */
    public function p1($a, $b){
        echo $a, "\n\r", $b;
    }

    /***
     * 添加用户
     * @return string
     */
    public function add(){
        $model = new Member();
        return $this->render('add',['model'=>$model]);
    }

    /**
     * 添加用户
     * @param $member
     * @return string
     */
    public function addPost($member){
        $model = new Member($member);

        if($model->save(true)){
            $this->redirect('/');
        }
        return $this->render('add',['model'=>$model]);
    }

    /**
     * 登录
     * @return string
     */
    public function login(){
        if($this->app->user->getIsLogin()){
            $this->redirect('/');
        }
        $model = new LoginForm();
        return $this->render('login',['model'=>$model]);
    }

    /**
     * 登录
     * @param $user
     * @return string
     */
    public function loginPost($user){
        $model = new LoginForm($user);
        if($model->validate()){
            $info = Member::find(['username'=>$model->username]);
            if(!$info){
                $model->addError('username',"登录失败，用户名或者密码错误");
            }else{
                if($this->app->user->passwordVerify($model->password,$info->password)){
                    if($this->app->user->login($info->asArray(),$this->post('rememberMe'))){
                        $this->redirect('/');
                    }else{
                        $model->addError('username',"登录失败");
                    }
                }else{
                    $model->addError('username',"登录失败,用户名或者密码错误");
                }
            }
        }
        return $this->render('login',['model'=>$model]);
    }
    /**
     * 退出
     */
    public function logout(){
        $this->app->user->logout();
        $this->redirect('/');
    }
}