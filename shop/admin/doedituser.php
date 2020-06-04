<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>更新结果</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.js">

    </script>
  </head>
  <body>

<?php
include '../conn.php';
//获取内容
$uid = $_REQUEST['uid'];

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel      = $_REQUEST['tel'];
$sex      = $_REQUEST['sex'];
$email    = $_REQUEST['email'];
$address  = $_REQUEST['address'];

//写入数据库
$sql = "update user set uname = '".$username."',pwd = '".$password."',tel = '".$tel."',sex = '".$sex."',email = '".$email."',address = '".$address."' where id = ".$uid;

if ($conn->query($sql)) {
  echo "更新用户信息成功！正在跳转...";
  ?>
  <script type="text/javascript">
    //休眠5秒，跳转用户列表
    $(function() {
      sleep(500);
      location.href="userlist.php";
    });

    function sleep(n) { //n表示的毫秒数
           var start = new Date().getTime();
           while (true) if (new Date().getTime() - start > n) break;
       }
  </script>
  <?php
}else {
 echo "更新用户信息失败请重试！error:update goods_info error!";
}?>

  </body>
</html>
