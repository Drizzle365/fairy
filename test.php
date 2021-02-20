<?php
include "lib/mysql.php";
$db = new Mysql();
$a = $db->table('role_goods')->field('*')->where('Id>0')->pages(1, 5);
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<P>您一共有 <?php echo ($a['total']);?> 种物品：</P>
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
    foreach ($a['date'] as $goods)
    {
        echo "<tr>";
        echo "<td> {$goods['goods_name']} </td>";
        echo "<td> {$goods['num']} </td>";
        echo "<td><a href='/'>[查看]</a> <a href='/'>[使用]</a></td>";
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