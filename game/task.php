<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
if (isset($_GET['task'])) {
    $task = $db->table('task')->field('*')->where("Id={$_GET['task']}")->item();
} else {
    exit("未知的任务ID");
}
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h3>查看任务:<?php echo " {$task['name']}"; ?> </h3>
    <div style="height: 20px"></div>
    任务介绍:<?php echo "  {$task['content']}";?><br>
    任务奖励:<?php echo "  {$task['silver']} 银币";?><br>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>