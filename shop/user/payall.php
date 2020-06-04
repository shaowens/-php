
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
  <title>商城</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
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
  <p style="font-size:30px">选择支付方式</p>
      <br>  <br>  <br>  <br>
      <p >
<select class="" name="pay_method">


        <?php
$sql = "SELECT * FROM pay ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['id']?>"><?php
  echo $row['pay_method'];
 ?></option>

<hr>
 <?php
}
}
 ?> </select></p><br>
 <p style='font-size:30px'><a href="paysuccess.php?uid=<?php echo $uid?>">支付</a></p>


</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
