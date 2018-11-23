<?php
/**
 * Created by PhpStorm.
 * User: sherman
 * Date: 2017/9/13
 * Time: 11:46
 */

use X\Router;

Router::get('/', function ($p = 1) {
    return  (new controllers\SiteController())->home($p);
});