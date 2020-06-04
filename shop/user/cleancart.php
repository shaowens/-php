<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>清空购物车</title>
    <script src="../js/jquery.js"></script>
  </head>
  <body>

<?php
include '../conn.php';

$uid = $_REQUEST['uid'];
$sql = "delete from cart where user_id = ".$uid;
if ($conn->query($sql)) {
  echo "清空购物车成功！正在跳转...";
  ?>
  <script type="text/javascript">
  //休眠5秒，跳转广告列表
  $(function() {
  sleep(500);
  location.href="cart.php?uid=<?php echo $uid ?>";
  });

  function sleep(n) { //n表示的毫秒数
   var start = new Date().getTime();
   while (true) if (new Date().getTime() - start > n) break;
  }
  </script>
  <?php
}else {
  echo "清空购物车失败！";
}

 ?>
</body>
</html>
