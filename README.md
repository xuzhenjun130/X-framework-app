# X-framework-app
X-framework  例子

X-framework 项目源码：[https://github.com/xuzhenjun130/X-framework](https://github.com/xuzhenjun130/X-framework)

# 安装

## 独立安装框架
`composer require sherman/x`

## 安装包含例子的框架
`composer create-project  sherman/x-framework-app yourAppName`

或者

`git clone https://github.com/xuzhenjun130/X-framework-app.git`  git 先下载源码

`composer install` 安装依赖

# 本例子目录、文件说明
```
+--- composer.json       #composer 配置文件
+--- doc                 #说明文档
+--- config              #项目配置目录
|   +--- main.php        #配置文件
|   +--- params.php      #配置参数
|   +--- router.php      #路由配置
+--- controllers         #控制器目录
+--- index.php           #统一入口文件
+--- vendor              #composer自动加载及依赖文件
|   +--- autoload.php    #自动加载文件
|   +--- composer        #composer 目录
|   +--- sherman         #x框架
+--- views               #视图目录
|   +--- layouts         #公共视图目录
```
框架目录文件说明见：[https://github.com/xuzhenjun130/X-framework](https://github.com/xuzhenjun130/X-framework)

# 说明文档

待更新