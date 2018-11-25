<?php
use X\HtmlHelper;
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>X framework - 极简的php mvc 框架</h1>
    <p>框架地址：<a href="https://github.com/xuzhenjun130/X-framework">https://github.com/xuzhenjun130/X-framework</a></p>
    <p>例子及文档：<a href="https://github.com/xuzhenjun130/X-framework-app">https://github.com/xuzhenjun130/X-framework-app</a></p>
</div>
<h1>hello X</h1>

<ul>
    <li><?php echo HtmlHelper::a('添加用户','site/add') ?></li>
</ul>
