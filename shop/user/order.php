<?php
session_start();
include '../conn.php';
include 'function.php';
if (!isset($_REQUEST['uid'])) {
  echo "非法访问！";
  exit;
}
$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = ".$uid;
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
  <title>我的订单</title>
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
<table style="width: 100%">
    <tr>
        <th>订单id</th> <th>商品名</th> <th>数量</th>  <th>单价</th>  <th>总价</th>
    </tr>
<?php
$sql = "SELECT * FROM orders where user_id = ".$uid;
// echo $sql;
// exit;
$result = $conn->query($sql);
if (isset($result->num_rows) && ($result->num_rows > 0)) {
while($row = $result->fetch_assoc()) {

?>
    <tr>
  <td><?php echo $row['id']; ?></td>

  <td><?php echo getGoodsNameById($conn,$row['goods_id'])?></td>

  <td><?php echo $row['count']?></td>

  <td><?php echo getGoodsPriceById($conn,$row['goods_id']); ?></td>

  <td><?php echo  $row['count']*getGoodsPriceById($conn,$row['goods_id'])?></td>

  </tr>

<?php

}
}else{
  echo "没有订单";
}
 ?>
</table>

</div>
<!-- 页脚开始 -->
<?php include '../footer.php'; ?>
