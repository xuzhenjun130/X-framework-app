<?php
/**
 * 统一入口文件
 */
//composer 自动加载
require(__DIR__ . '/vendor/autoload.php');
//框架配置文件
$config = require __DIR__ . '/config/main.php';
//路由
require __DIR__ . '/config/router.php';
//框架文件
require dirname(__FILE__) . '/vendor/sherman/x/X.php';

$app = new X($config);
$app->run($app);