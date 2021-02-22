<div style="height: 15px;"></div>
<?php
$db = new Mysql();
$id = $_SESSION['userid'];
$res = $db->table('role')->field('*')->where("Id='$id'")->item();
if ($res) {
    echo "角色已创建，请返回游戏首页";
    exit();
}
$game_name = $_GET['name'];
$data = ['Id' => $_SESSION['userid'], 'name' => $_GET['name'],
    'sex' => $_GET['sex'], 'lv' => 1, 'exp' => 10, 'Hp' => 100,
    'Mp' => 50, 'Def' => 10, 'Atk' => 10, 'Spd' => 10, 'Hp_ing' => 100, 'Mp_ing' => 50,'map'=>1,'task'=>1];
$db->table('role')->insert($data);
echo "从现在起，你就叫" . $game_name . "了，真是个好看的孩子！";
?>
    <div style="height: 15px;"></div>
<div style="text-align: left;color: white;font-size: 14px">
    你是一个孤儿，自幼被桃花村的村长收养。<br>
    在你死缠难打之下，村长终于同意传授你修仙的法门。<br>
    修仙的第一步，便是觉醒命格，赶快到【广场】的【觉醒石碑】进行觉醒吧。<br>
    <div style="height: 15px;"></div>
    <a href="index.php?page=start_2.php">
        <button type="button" class="btn btn-outline-warning">继续</button>
    </a>
</div>
