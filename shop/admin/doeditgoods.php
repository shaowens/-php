<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
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
//编辑商品处理逻辑
include '../conn.php';

$gid = $_REQUEST['gid'];

$goods_name  = $_REQUEST['goods_name'];
$type        = $_REQUEST['type'];
$old_price   = $_REQUEST['old_price'];
$price       = $_REQUEST['price'];
$desc =  $_REQUEST['desc'];
$picture = $_REQUEST['picture'];

$sql = "update goods set goods_name = ' $goods_name ',type = '$type',price = '$price',old_price = '$old_price',description = '$desc',picture='$picture' where id =' $gid'";

if ($conn->query($sql)) {
  echo "更新商品成功！正在跳转...";
  ?>
  <script type="text/javascript">
    //休眠5秒，跳转广告列表
    $(function() {
      sleep(500);
      location.href="goodslist.php";
    });

    function sleep(n) { //n表示的毫秒数
           var start = new Date().getTime();
           while (true) if (new Date().getTime() - start > n) break;
       }
  </script>
  <?php
}else {
 echo "更新商品失败请重试！error:update goods_info error!";
}

 ?>
</body>
</html>
