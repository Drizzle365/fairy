<?php
session_start();
$user = null;
$name = null;
if (isset($_SESSION['userid'])) {
    $user = $_SESSION['userid'];
    require_once 'lib/mysql.php';
    $db = new Mysql();
    $res = $db->table('user')->field('name')->where("Id=$user")->item();
    $name = $res['name'];
    header('location:main.php');
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
<nav class="navbar navbar-light bg-light" style="border-radius: 10px;opacity: 0.8">
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
<!-- 登录模态框 -->
<div class="modal fade" id="login">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- 模态框头部 -->
            <div class="modal-header">
                <h4 class="modal-title">登录-仙之梦</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- 模态框主体 -->
            <?php require "assets/common/login.html" ?>
            <!-- 模态框底部 -->
        </div>
    </div>
</div>
<!-- 注册模态框 -->
<div class="modal fade" id="register">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <!-- 模态框头部 -->
            <div class="modal-header">
                <h4 class="modal-title">注册-仙之梦</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- 模态框主体 -->
            <div class="modal-body">
                <?php require "assets/common/register.html" ?>
            </div>
        </div>
    </div>
</div>
<!--suppress CssInvalidFunction -->
<div class="container main" style="width: 100%;height: 400px;background-color: rgb(67,178,246,0.6);">
    <div style="color: white;font-size: 18px;margin: 20px;position: absolute">游戏公告 :</div>
    <div style="color: white;font-size: 15px;margin: 45px;position: absolute;text-align: left">
        <br>嘿嘿，本游戏正在紧张开发中，开发进度会在 Github 开源<br><br>
        游戏介绍 : <br>
        这是一个类似十年前的wap网页文字游戏，游戏多以文字和图片呈现，像是很久之前的QQ家园里面的 精武堂 召唤之王 之类的文字为主的网游。<br>
        <br>Github: <a target="_blank" href="https://github.com/Drizzle365/fairy">
            https://github.com/Drizzle365/fairy</a>
    </div>
</div>

</body>
<footer>
    <div class="container footer">
        <div class="container footer-title">Copyright © 2021 Drizzle. All Rights Reserved.</div>
    </div>
</footer>
</html>
<script src="assets/js/user.js"></script>