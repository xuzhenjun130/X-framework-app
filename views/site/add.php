<?php
use X\HtmlHelper;

/**
 * @var  $model \models\Member
 */
$error = $model->getErrors();
?>
<form style="width:500px;" method="post" action="<?php echo HtmlHelper::url('site/add') ?>">
    <div class="form-group text-warning">
        <?php
            foreach ($error as $v){
                echo '<p>',$v,'</p>';
            }
        ?>
    </div>
    <div class="form-group">
        <label for="username">用户名</label>
        <input type="text" name="member[username]" class="form-control"  id="username" placeholder="用户名">
    </div>
    <div class="form-group">
        <label for="phone">手机号</label>
        <input type="text" name="member[phone]" class="form-control" id="phone" placeholder="手机号">
    </div>
    <div class="form-group">
        <label for="password">密码</label>
        <input type="password" name="member[password]" class="form-control" id="password" placeholder="密码">
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>