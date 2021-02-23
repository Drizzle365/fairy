<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
if (!isset($_GET['Id'])) exit('Id错误');
$goods = $db->table('role_goods')->field('*')->where("Id={$_GET['Id']}")->item();
$data = $db->table('role_goods')->where("Id={$_GET['Id']}")->item();
$data['value'] = $_GET['value'];
$data['num'] = 1;
unset($data['Id']);
$db->table('role_goods')->insert($data);
if ($goods['num'] > 1) {
    $db->table('role_goods')->where("Id={$_GET['Id']}")->update(array('num' => $goods['num'] - 1));
} else {
    $db->table('role_goods')->where("Id={$_GET['Id']}")->delete();
}
if ($role['task']==7)
    $db->table('role')->where("Id=$user")->update(array('task'=>8));
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h4>洗练成功</h4>
    <p>
        您的：<?php echo "{$goods['goods_name']}"; ?> 已经变为<?php echo "{$_GET['value']}"; ?>属性了
    </p>
    <div style="height: 20px"></div>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>