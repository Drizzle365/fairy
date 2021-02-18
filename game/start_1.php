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
<div style="text-align: left;color: white;font-size: 14px">
    “<?php echo $game_name; ?>。”司婆婆看着襁褓中的婴孩，那婴孩也不怕她，竟然咿咿呀呀的笑了。<br>
    ……<br>
    江边，笛声传来，牧童坐在一头母牛背上吹笛，笛声清脆悠扬。这牧童十一二岁年纪，长得眉清目秀，唇红齿白，衣衫半敞，胸前挂着一枚玉佩。<br>
    这少年正是十一年前司婆婆从江边捡来的婴儿，这些年来村里的老人含辛茹苦将这孩子养大，司婆婆不知从哪儿弄来一头母牛，让婴儿时的秦牧每天喝牛奶，熬过了容易早夭的时期。<br>
    <a href="index.php?page=start_2.php">
        <button type="button" class="btn btn-outline-warning">继续</button>
    </a>
</div>
