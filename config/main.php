<?php
/**
 * 前台程序配置主文件
 * @author zhenjun_xu <412530435@qq.com>
 */
define('DOMAIN',$_SERVER['HTTP_HOST']);
define("DOMAIN_LONG",'http://www.'.DOMAIN);
define('X_DEBUG', true);
return [
    'basePath' => dirname(__FILE__) . '/..',
    'name' => 'demo',
    'timeZone' => 'Asia/Shanghai',
    //组件配置
    'components' => [
        'errorHandler' => [
            'class' => X\ErrorHandler::class,
            'discardOutput' => true,
            'maxLine' => 10,
        ],
        'db' => [
            'class' => X\Db::class,
            'charset' => 'utf8',
            'dns' => 'mysql:dbname=demo;host=127.0.0.1',
            'username' => 'root',
            'password' => '',
            'tablePre' => ''
        ],
        'uploader'=>[
            'class'=>X\Uploader::class,
            'savePath' =>__DIR__.'/../../upload/',
            'imgDomain' => DOMAIN_LONG.'/upload/'
        ],
    ],
    'params'=>require 'params.php',
];