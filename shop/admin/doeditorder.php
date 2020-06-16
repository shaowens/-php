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

$id = $_REQUEST['id'];
$user_id = $_REQUEST['user_id'];
$goods_id = $_REQUEST['goods_id'];
$count = $_REQUEST['count'];

$sql = "update orders set id = ' $id ',user_id= '$user_id',goods_id = '$goods_id',count = '$count' where id =' $id'";

if ($conn->query($sql)) {
    echo "更新订单成功！正在跳转...";
    ?>
    <script type="text/javascript">
        //休眠5秒，跳转广告列表
        $(function() {
            sleep(500);
            location.href="orderlist.php";
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
