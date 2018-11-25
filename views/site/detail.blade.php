<?php
/**
 * @var $model \models\Member
 */
$hello = '<script>alert(234)</script>'
?>
<ul>
    <li>用户名：{{$model->username}}</li>
    <li>手机号：{{$model->phone}}</li>
    <li>测试脚本：{{$hello}}</li>
</ul>
