<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<script src="./js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/jquery.js"></script>
<body>

</body>
</html>
<?php
include '../conn.php';
//接受数据
$aid = $_REQUEST['aid'];

$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$content     = $_REQUEST['content'];

//拼装sql
$sql = "update wenzhang set title = '".$title."',author = '".$author."',content = '".$content."' where id = ".$aid;


//写入数据库
if ($conn->query($sql)) {
  echo "更新文章成功！正在跳转...";
   ?>
   <script type="text/javascript">
     //休眠5秒，跳转广告列表
     $(function() {
       sleep(500);
       location.href=" articlelist.php";
     });

     function sleep(n) { //n表示的毫秒数
            var start = new Date().getTime();
            while (true) if (new Date().getTime() - start > n) break;
        }
   </script>
   <?php
}else {
  echo "更新文章失败请重试！error:update article error!";
}
//返回状态

  ?>
