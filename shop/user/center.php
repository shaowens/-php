<?php
session_start();
include '../conn.php';
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
  <link rel="stylesheet" type="text/css" href="../css/index.css"><link rel="stylesheet" type="text/css" href="../css/list.css">
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

<?php

while($row = $result->fetch_assoc()) {

if ($row['sex']==1) {
  $sexx = '男';
}else {
  $sexx = '女';
}
    echo"<table style='width: 50%;float: left;margin: auto' >";
    echo"<tr>";
    echo"<td colspan='2' style='text-align:center;' >个人信息表</td>";
    echo"<tr>";
    echo"<tr>";
    echo"<tr ><th>用户名</th><td>{$row['uname']}</td></tr> <tr><th >性别</th><td>{$sexx}</td></tr> <tr><th >头像</th><td><img src='".$row['avatar']."' width='80px'></td></tr> <tr><th >密码</th><td>{$row['pwd']}</td></tr> <tr><th >手机号</th> <td>{$row['tel']}</td></tr> <tr><th >邮箱</th> <td>{$row['email']}</td></tr>";
    echo"</table>";
}

 ?>

 <p style='font-size:30px;float: right'>
     <a href="edituserinfo.php?uid=<?php echo $uid?>">修改信息</a><br>
     <a href="upload.php?uid=<?php echo $uid?>">上传头像</a><br>
     <a href="order.php?uid=<?php echo $uid?>">我的订单</a>
 </p>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
