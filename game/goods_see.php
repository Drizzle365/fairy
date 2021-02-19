<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
if (isset($_GET['goods'])&&$_GET['goods']!='') {
    $goods = $db->table('goods')->field('*')->where("Id={$_GET['goods']}")->item();
} else {
    exit("未知的物品ID");
}
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h3>查看物品:<?php echo " {$goods['name']}"; ?> </h3>
    <div style="height: 20px"></div>
    物品介绍:<?php echo "  {$goods['content']}"; ?><br>
    物品属性:
    <div style="height: 10px"></div>
    <?php


    ?>
    <div style="height: 20px"></div>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>