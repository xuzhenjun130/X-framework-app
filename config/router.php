<?php
/**
 * Created by PhpStorm.
 * User: sherman
 * Date: 2017/9/13
 * Time: 11:46
 */

use X\Router;

Router::error(function ($params){
    (new controllers\SiteController())->error($params);
});

Router::get('/', function ($p = 1) {
    return  (new controllers\SiteController())->home($p);
});

Router::get('site/detail', function ($id) {
    return  (new controllers\SiteController())->detail($id);
});

Router::get('site/add', function () {
    return  (new controllers\SiteController())->add();
});

Router::post('site/add', function ($member) {
    return  (new controllers\SiteController())->addPost($member);
});

Router::get('site/login', function () {
    return  (new controllers\SiteController())->login();
});
Router::post('site/login', function ($user) {
    return  (new controllers\SiteController())->loginPost($user);
});

Router::get('site/logout', function () {
    return  (new controllers\SiteController())->logout();
});