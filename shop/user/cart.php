<?php
session_start();
include '../conn.php';
include 'function.php';

$uid=$_REQUEST['uid'];

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
  <title>服装商城</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/list.css">
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

        <?php
$sql = "SELECT * FROM cart where user_id = ".$uid;
$result = $conn->query($sql);
        echo"<table style='width:100%;'>";
        echo"<tr>";
        echo"<td colspan='5' style='text-align:center;' >我的购物车</td>";
        echo"<tr>";
        echo"<tr>";
        echo"<th >用户名</th><th >商品名称</th><th >数量</th><th ></th><th ></th><th >";
        echo"<tr>";
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $name=getUserNameById($conn,$row['user_id']);
    $goods_name=getGoodsNameById($conn,$row['goods_id']);

        echo"<tr>";

        echo "<td>{$name}</td>";
        echo "<td>{$goods_name}</td>";
        echo "<td>{$row['count']}</td>";
        echo "<td><a href='editcart.php?uid={$row['user_id']}&gid={$row['goods_id']}&count={$row['count']}'>更改</a></td>";
        echo "<td><a href='deletecart.php?uid={$row['user_id']}&gid={$row['goods_id']}'>删除</a></td>";
        echo "<td><a href='pay.php?uid={$row['user_id']}&gid={$row['goods_id']}&count={$row['count']}'>付款</a></td>";
        echo"</tr>";

 // echo "用户名：".getUserNameById($conn,$row['user_id'])."<br>商品名称:".getGoodsNameById($conn,$row['goods_id'])."<br>数量:".$row['count'];
 ?>
<hr>
 <?php
}
 echo"</table>";
}
 ?> </p>
 <p style='font-size:30px'><a href="payall.php?uid=<?php echo $uid?>">全部付款</a></p>
 <p style='font-size:30px'><a href="cleancart.php?uid=<?php echo $uid?>">清空购物车</a></p>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
