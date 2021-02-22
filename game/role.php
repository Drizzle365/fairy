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
    <h4>基础属性: </h4>
    攻击：<?php echo $role['Atk']; ?><br>
    防御：<?php echo $role['Def']; ?><br>
    速度：<?php echo $role['Spd']; ?><br>
    <div style="height: 10px"></div>
    <h4>修仙属性: </h4>
    气运：七彩<br>
    心境：化神<br>
    肉身：涅槃<br>
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