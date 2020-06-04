<?php
session_start();
include '../conn.php';
$uid=$_REQUEST['uid'];
$gid=$_REQUEST['gid'];
$count=$_REQUEST['count'];
$sql = "SELECT * FROM user where id = '".$uid."'";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {

    echo '请先注册或登录！';
    exit;
}

?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>修改购物车信息</title>
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/general.js"></script>
    <script type="text/javascript" src="../js/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->

<!-- 头部开始 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">
    <br>  <br>  <br>  <br>
    <p style="font-size:30px">
    <form class="" action="doeditcart.php?uid=<?php echo $uid?>&gid=<?php echo $gid?>" method="post">
        <table>
            <tr>
                <td>用户id：</td>
                <td><?php echo $uid ?></td>
            </tr>
            <tr>
                <td>商品id：</td>
                <td><?php echo $gid?></td>
            </tr>
            <tr>
                <td>商品数量：</td>
                <td><input type="text" name="count" value="<?php echo $count?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="" value="更新"></td>
            </tr>
        </table>

    </form>
    <?php  ?>
    </p>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
    <script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
