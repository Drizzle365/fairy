<?php
session_start();
$user = null;
$name = null;
$page = null;
$role_map = null;
if (isset($_SESSION['userid'])) {
    $user = $_SESSION['userid'];
    require_once 'lib/mysql.php';
    $db = new Mysql();
    $res = $db->table('user')->field('name')->where("Id=$user")->item();
    $name = $res['name'];
} else if (isset($_GET['map'])) {
    $role_map = $_GET['map'];
} else {
    header("Location:index.php");
}
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>仙之梦</title>
    <link rel="icon" href="https://github.com/fluidicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://github.com/fluidicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-image: url("assets/image/background.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        width: 92%;
        height: 100%;
        align-items: center;
        margin: auto;
        text-align: center;
    }
</style>
<body>
<div style="height: 10px"></div>
<nav class="navbar navbar-light bg-light" style="opacity: 0.8;border-radius: 10px;">
    <div style="color:black;font-size: 18px"><a href="/">仙之梦</a></div>
    <div class="button">
        <?php
        if ($user) {
            $html = <<<EOF
            <span style="font-size: 19px">$name</span>
            <span style="font-size: 19px">($user)</span>
            <button type="button" class="btn btn-outline-danger" onclick="logout()" ">退出</button>
            EOF;
            echo $html;
        } else {
            $html = <<<EOF
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#login">登录</button>
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#register">注册</button>
            EOF;
            echo $html;
        }
        ?>
    </div>
</nav>
<!--suppress CssInvalidFunction -->
<div class="container main" style="width: 90%;height: auto;background-color: rgb(67,178,246,0.6);position: relative">
    <div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
        <div style="height: 20px"></div>
        <h6 style="color: #f1c9a8">系统消息： 欢迎来到仙之梦！</h6>
    </div>
    <?php
    $db = new Mysql();
    $res = $db->table('role')->field('*')->where("Id=$user")->item();
    if (!$res && !$page) {
        include "game/start.php";
    } else if ($page=='facilities') {
        /** @noinspection PhpIncludeInspection */
        include "game/facilities/{$_GET['facilities_id']}.php";
    } else if ($page) {
        /** @noinspection PhpIncludeInspection */
        include "game/$page.php";
    } else {
        include "game/index.php";
    }
    ?>
    <div style="height: 20px"></div>
</div>
</body>
<footer>
    <div class="container footer">
        <div class="container footer-title">Copyright © 2021 Drizzle. All Rights Reserved.</div>
    </div>
</footer>
</html>
<script src="assets/js/user.js"></script>