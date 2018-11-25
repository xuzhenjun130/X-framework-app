<?php
/**
 * 统一入口文件
 */
//composer 自动加载
require(__DIR__ . '/vendor/autoload.php');
//自定义配置文件
$config = require __DIR__ . '/config/main.php';
//路由
require __DIR__ . '/config/router.php';

$app = new X\X($config);
$app->run();