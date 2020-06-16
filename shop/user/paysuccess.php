
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

<?php

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {


        include '../conn.php';
        $sql = "insert into orders(id,user_id,goods_id,count)"
        ." values('".$row["id"]."','".$row["user_id"]."',".$row["goods_id"].",'".$row["count"]."')";

        if($conn->query($sql)=== TRUE){
            $sql = "delete from cart where user_id = ".$uid;
            $result = $conn->query($sql);
          ?>
            <script type="text/javascript">
            location.href="order.php?uid=<?php echo $uid ?>";
             </script>
            <?php
        }else{
            $sql = "delete from cart where user_id = ".$uid;
            $result = $conn->query($sql);
            ?>
            <script type="text/javascript">
                location.href="order.php?uid=<?php echo $uid ?>";
            </script>
            <?php
        }
        ?>
        <?php

    }
} else {
    echo "0 个结果";
}
$conn->close();
?>
<div class="container w1100">
<br>
<br>
<br>
支付成功！

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
