<?php
namespace controllers;

use X\Controller;

/**
 * Created by PhpStorm.
 * User: sherman
 * Date: 2018/11/22
 * Time: 23:08
 */
class SiteController extends Controller
{

    public function home($p){
        return  $this->render('home',['p'=>$p]);
    }
}