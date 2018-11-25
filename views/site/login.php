<?php
use X\HtmlHelper;

/**
 * @var  $model \models\Member
 */
$error = $model->getErrors();
?>

<form class="form-signin" style="width:500px;" method="post" action="<?php echo HtmlHelper::url('site/login') ?>">
    <h2 class="form-signin-heading">请登录</h2>
    <div class="form-group text-warning">
        <?php
        foreach ($error as $v){
            echo '<p>',$v,'</p>';
        }
        ?>
    </div>
    <label for="username" class="sr-only">用户名</label>
    <input type="text" name="user[username]" id="username" class="form-control" placeholder="用户名" required autofocus>
    <label for="inputPassword" class="sr-only">密码</label>
    <input type="password" name="user[password]" id="inputPassword" class="form-control" placeholder="密码" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="rememberMe" value="remember-me"> 记住我
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
</form>