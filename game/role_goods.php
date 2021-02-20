<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
if (isset($_GET['pages'])) {
    $pages=$_GET['pages'];
    $goods = $db->table('role_goods')->field('*')->where("Id={$user}")->pages($pages,5);
} else {
    exit("未知的NPC");
}
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h3>我的背包</h3>
    <div style="height: 20px"></div>
    <P>银币 <?php echo ($role['silver']);?> 枚</P>
    <P>您一共有 <?php echo ($goods['total']);?> 种物品：</P>
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
        foreach ($goods['date'] as $g)
        {
            echo "<tr>";
            echo "<td> {$g['goods_name']} </td>";
            echo "<td> {$g['num']} </td>";
            echo "<td><a href='/main.php?page=goods_see&goods={$g['goods_id']}'>[查看]</a> <a href='#'>[使用]</a></td>";
        }
        ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <div style="height: 20px"></div>
    <a href="/main.php" style="color: #0f6674;font-size: 15px;margin-top: 3px">回到首页</a>
</div>