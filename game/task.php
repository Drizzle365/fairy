<!--
任务系统类型
1.对话类型
2.

-->

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
    任务介绍:<?php echo "  {$task['content']}"; ?><br>
    任务奖励:
    <div style="height: 10px"></div>
    <?php
    if ($task['silver']>0)
        echo "  {$task['silver']} 银币";
    if($task['goods'])
    {
        $task_goods=explode(',',$task['goods']);
        foreach ($task_goods as $key => $value){
            $goods=$db->table('goods')->field('*')->where("Id=$value")->item();
            echo " | {$goods['name']} | <br>";
        }
    }
    ?>
    <div style="height: 20px"></div>
    <a href="/main.php?page=task_submit&task=<?php echo $task['Id']; ?>"
       style="color: #0f6674;font-size: 15px;margin-top: 3px">交付</a>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>