<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../js/jquery.js"></script>
  </head>
  <body>
<?php
include '../conn.php';

$uid = $_REQUEST['uid'];
$goods_id = $_REQUEST['gid'];
$count = $_REQUEST['count'];

$sql = "insert into orders(user_id,goods_id,count) values(".$uid.",".
$goods_id.",".$count.")";


if ($conn->query($sql) === TRUE) {
    echo "购买成功,正在跳转...";
    ?>
  <script type="text/javascript">
  //休眠5秒，跳转广告列表
  $(function() {
  sleep(500);
  location.href="order.php?uid=<?php echo $uid ?>";
  });

  function sleep(n) { //n表示的毫秒数
   var start = new Date().getTime();
   while (true) if (new Date().getTime() - start > n) break;
  }
  </script>
    <?php
  }else {
    echo "购买失败，请返回重试！";
  }
   ?>


</body>
</html>
