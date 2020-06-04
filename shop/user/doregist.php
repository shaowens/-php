<!DOCTYPE>
<html >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include '../conn.php';

if (!isset($_POST['username'])) {
  echo "请填写用户名！";
  exit;
}
if (!isset($_POST['password'])) {
  echo "请填写密码！";
  exit;
}
if (!isset($_POST['tel'])) {
  echo "请填写电话！";
  exit;
}
if (!isset($_POST['email'])) {
  echo "请填写email！";
  exit;
}
if (!isset($_POST['address'])) {
  echo "请填写地址！";
  exit;
}
//获取注册表单的数据
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel = $_REQUEST['tel'];
$sex = $_REQUEST['sex'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
?>

<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

</head>
<body>
<!-- 头部开始 -->
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href="#"><img src="../images/logo.jpg"></a></div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>

<?php
$sql = "INSERT INTO user(uname,pwd,tel,sex,email,address) VALUES('".$username."','".$password."','".$tel."','".$sex."','".$email."','".$address."')";

if ($conn->query($sql) === TRUE) {
?>
注册成功，请
<a href="login.php">登录</a>！
<?php
} else {
  ?>
  注册失败，请重新
  <a href="regist.php">注册</a>！
  <?php
}

$conn->close();

 ?>

  </div>
</div>
<!-- 主体结束 -->
<div class="cl"></div>
<!-- 页脚开始 -->
<div class="footer mt20">
  <div class="links radius4 mt20">

      </div>

</div><!-- 页脚结束 -->
<script type="text/javascript" src="../js/md5.js"></script>


</body></html>
