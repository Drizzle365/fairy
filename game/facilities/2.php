<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
$goods=$db->table('role_goods')->field('*')->where("role_id=$user and class=1 and value='0'")->list();
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h4>洗练装备</h4>
    <table class="table">
        <thead>
        <tr>
            <th>物品</th>
            <th>数量</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($goods as $g)
        {
            $v='';
            if ($g['value']!=0)
                $v=$g['value'] . ' · ';
            echo "<tr>";
            echo "<td>{$v}{$g['goods_name']} </td>";
            echo "<td> {$g['num']} </td>";
            echo "<td><a href='/main.php?page=goods_see&goods={$g['goods_id']}'>[查看]</a> <a href='main.php?facilities_id=2.1&page=facilities&Id={$g['Id']}'>[洗练]</a></td>";
        }
        ?>
        </tbody>
    </table>
    <div style="height: 20px"></div>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>