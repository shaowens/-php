<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
include '../conn.php';
//获取内容
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel      = $_REQUEST['tel'];
$sex      = $_REQUEST['sex'];
$email    = $_REQUEST['email'];
$address  = $_REQUEST['address'];

//写入数据库
$sql = "insert into user(uname,pwd,tel,sex,email,address) values('".$username."','".$password."','".$tel."','".$sex."','".$email."','".$address."')";
if ($conn->query($sql)==TRUE) {
    header("Location: userlist.php");
}else {
  echo "failed！";
}
