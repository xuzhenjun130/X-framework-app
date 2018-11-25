<?php
/**
 * Created by PhpStorm.
 * User: sherman
 * Date: 2017/9/13
 * Time: 11:46
 */

use X\Router;

Router::get('/', function () {
    return  (new controllers\SiteController())->home();
});

Router::get('site/p1', function ($a, $b = 0) {
    return  (new controllers\SiteController())->p1($a, $b);
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