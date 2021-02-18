<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
$task = $db->table('task')->field('*')->where("Id={$role['task']}")->item();
if (isset($_GET['npc'])) {
    $npc = $db->table('npc')->field('*')->where("Id={$_GET['npc']}")->item();
} else {
    exit("未知的NPC");
}
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h3>【NPC】:<?php echo " {$npc['name']}"; ?> </h3>
    <div style="height: 20px"></div>
    <?php
    if ($task['class'] == 1 && $task['point_id'] == $npc['Id']) {
        $db->table('role')->where("Id=$user")->update(array('task' => $role['task'] + 1));
    }
    echo "您和{$npc['name']}完成一番长谈.";
    ?><br>
    <div style="height: 20px"></div>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>