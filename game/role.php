<?php
$db = new Mysql();
$user = $_SESSION['userid'];
if ($_GET['role'] == 'self') {
    $role = $db->table('role')->field('*')->where("Id=$user")->item();
} else {
    $role = $db->table('role')->field('*')->where("Id={$_GET['role']}")->item();
}
$lv=$db->table('lv')->field('*')->where("Lv={$role['Lv']}")->item();
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h4>个人信息: </h4>
    姓名：<?php echo $role['name']; ?><br>
    境界：<?php echo $lv['name']; ?><br>
    修为：<?php echo $role['Exp'] . '/' . $lv['exp']; ?>
    <?php if ($_GET['role'] == 'self') {
        echo '<a>
        <button type="button" class="btn btn-warning" style="margin-left: 5px">晋升</button>
        </a>';
    }
    ?>
    <div>
        <span style="float: left">血量：</span>
        <div class="progress" style="width: 100px;float: left;margin-top: 4px">
            <div class="progress-bar bg-danger" role="progressbar"
                 style="width:<?php echo($role['Hp_ing'] / $role['Hp'] * 100 . '%'); ?>;">
            </div>
        </div>
        <span style="color:white;margin-top: 8px;">
                <?php echo '&nbsp' . ($role['Hp_ing'] . '/' . $role['Hp']); ?>
            </span>
    </div>
    <div>
        <span style="float: left">法力：</span>
        <div class="progress" style="width: 100px;float: left;margin-top: 4px">
            <div class="progress-bar bg-primary" role="progressbar"
                 style="width:<?php echo($role['Mp_ing'] / $role['Mp'] * 100 . '%'); ?>;">
            </div>
        </div>
        <span style="color:white;margin-top: 8px;">
                <?php echo '&nbsp' . ($role['Mp_ing'] . '/' . $role['Mp']); ?>
            </span>
    </div>
    <div style="height: 10px"></div>
    <h4>三行属性: </h4>
    水攻：<?php echo $role['water_atk']; ?>
    水抗：<?php echo $role['water_def']; ?><br>
    火攻：<?php echo $role['fire_atk']; ?>
    火抗：<?php echo $role['fire_def']; ?><br>
    木攻：<?php echo $role['wood_atk']; ?>
    木抗：<?php echo $role['wood_def']; ?><br>
    <div style="height: 10px"></div>
    <h4>人生属性: </h4>
    气运：<?php echo $role['fate']; ?><br>
    声望：<?php echo $role['prestige']; ?><br>
    <div style="height: 10px"></div>
    <?php
    if ($_GET['role'] == 'self') {
        $html = <<<EOF
        <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">查看装备</a>
        <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">返回首页</a>
        EOF;
        echo $html;
    } else {
        $html = <<<EOF
        <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">加为好友</a>
        <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">返回首页</a>
        EOF;
        echo $html;
    }
    ?>
</div>