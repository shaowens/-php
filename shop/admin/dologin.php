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
session_start();

include '../conn.php';

$uname = $_REQUEST['username'];
$pwd = $_REQUEST['password'];
$sql = "SELECT * FROM admin where uname = '".$uname."' and pwd = '".$pwd."'";
$result = $conn->query($sql);
$uid='';

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    // 存储 session 数据
    $sdminid = $row['id'];
    $_SESSION['adminid'.$uname]=$uname;
  }

header("Location: main.php?adminid=".$uname);
exit;

  }else {
echo '登录失败！';
  }
?>
