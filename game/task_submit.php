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
    <h3><?php
        if ($role['task'] > $_GET['task']) {
            $db->table('role')->where("id=$user")->update(array('task' => $role['task'] + 1));
            $db->table('role')->where("id=$user")->update(array('silver' => $role['ls'] + $task['ls']));
            echo "交付成功";
        } else {
            echo "交付失败";
        }
        ?>
    </h3>
    <div style="height: 20px"></div>
    <?php
    $html = '';
    if ($role['task'] > $_GET['task']) {
        echo "获得奖励:<br>";
        if ($task['ls'] > 0)
            echo "{$task['ls']} 灵石 <br>";
        if ($task['goods']) {
            $task_goods = explode(',', $task['goods']);
            foreach ($task_goods as $key => $value) {
                $goods = $db->table('goods')->field('*')->where("Id=$value")->item();
                $role_goods = $db->table('role_goods')->field('num')->where("Id=$user and goods_id={$goods['Id']}")->item();
                if ($role_goods) {
                    $db->table('role_goods')->where("Id=$user and goods_id={$goods['Id']}")->update(array('num' => $role_goods['num'] + 1));
                }else{
                    $date = ['Id' => $user, 'goods_id' => $goods['Id'], 'goods_name' => $goods['name'], 'num' => 1];
                    $db->table('role_goods')->insert($date);
                }

                echo " | <a href='/main.php?page=goods_see&goods={$goods['Id']}'>{$goods['name']}</a> | <br>";
            }
        }
    } else {
        echo "任务未完成！";
    }
    ?>
    <div style="height: 20px"></div>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>