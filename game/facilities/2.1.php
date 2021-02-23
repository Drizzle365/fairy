<?php
$db = new Mysql();
$user = $_SESSION['userid'];
$role = $db->table('role')->field('*')->where("Id=$user")->item();
if (!isset($_GET['Id'])) exit('Id错误');
$goods = $db->table('role_goods')->field('*')->where("Id={$_GET['Id']}")->item();
?>
<div style="height: 20px"></div>
<div style="text-align: left;color: white;font-size: 14px;margin-top: 10px">
    <h4>开始洗练</h4>
    <p>
        请选择想要洗练的属性：
    </p>
    <form action="/main.php?facilities_id=2.2&page=facilities&Id=" method="get">
        <label style="display: none">
            <input type="text" name="facilities_id" class="form-control" value="2.2" style="display: none">
        </label>
        <label style="display: none">
            <input type="text" name="page" class="form-control" value="facilities" style="display: none">
        </label>
        <label style="display: none">
            <input type="text" name="Id" class="form-control" value="<?php echo $_GET['Id']; ?>" style="display: none">
        </label>
        <div class="form-check" style="margin-top: 8px;margin-left: 3px">
            <input class="form-check-input" type="radio" name="value" id="exampleRadios1" value="水"
                   checked>
            <label class="form-check-label" for="exampleRadios1">
                水
            </label>
        </div>
        <div class="form-check" style="margin-top: 8px;margin-left: 3px">
            <input class="form-check-input" type="radio" name="value" id="exampleRadios2" value="火">
            <label class="form-check-label" for="exampleRadios2">
                火
            </label>
        </div>
        <div class="form-check" style="margin-top: 8px;margin-left: 3px">
            <input class="form-check-input" type="radio" name="value" id="exampleRadios3" value="木">
            <label class="form-check-label" for="exampleRadios3">
                木
            </label>
        </div>
        <div style="height: 20px"></div>
        <button type="submit" class="btn btn-outline-warning">开始洗练</button>
    </form>
</div>