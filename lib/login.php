<?php
if (!isset($_POST["userid"])) {
    echo "无效的请求";
    exit();
}
$id = $_POST['userid'];
$password = $_POST['password'];
require_once "mysql.php";
$db = new Mysql();
$res = $db->table('user')->field('*')->where("Id=$id and password='$password'")->item();
if (!$res) {
    exit(json_encode(array('code' => 0, 'msg' => '登录失败')));
}
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$time = date("Y年m月d日h时i分a");
$_SESSION['userid'] = $id;
$db->table('user')->where("Id=$id")->update(array('ip' => $ip, 'time' => $time));
exit(json_encode(array('code' => 1, 'msg' => '登录成功')));





