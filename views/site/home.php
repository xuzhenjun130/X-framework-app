<?php
use X\HtmlHelper;

/**
 * @var $member \models\Member
 */
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

<form class="form-inline">
    <div class="form-group">
        <input type="text" name="q" class="form-control"  value="<?php echo $this->get('q') ?>" placeholder="用户名">
    </div>
    <button type="submit" class="btn btn-default">搜索</button>
</form>
<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>用户名</th>
        <th>手机号</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>

    <?php foreach($members as $member): ?>
    <tr>
        <td><?php echo $member->id ?></td>
        <td><?php echo $member->username ?></td>
        <td><?php echo $member->phone ?></td>
        <td><?php echo $member->created_at ?></td>
        <td>
            <?php echo HtmlHelper::a('详情','site/detail',['id'=>$member->id],['class'=>'btn btn-success']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<nav aria-label="Page navigation">
    <?php echo $page ?>
</nav>