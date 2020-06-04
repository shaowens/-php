<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>搜索</title>
<link rel="stylesheet" type="text/css" href="./css/general.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/general.js"></script>
<script type="text/javascript" src="./js/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->


<!-- 头部开始 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">

      <br>  <br>  <br>  <br>
        <ul>
<?php

if (isset($_REQUEST['kw'])) {

  $keywords = $_REQUEST['kw'];
//包含关键词，进行搜索
$sql = "select * from goods where goods_name like '%".$keywords."%'";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
    //echo "<li class='search'><a style = 'font-size:19px' href='/goods.php?id=".$row['id']."'><div class='searchd'><img  src='".$row['picture']."' width='200px'></div>".$row['goods_name'].'<br>'.$row['price']."</a></li>";
    if (isset($_REQUEST['uid'])) {
        echo "<li class='search'><a style = 'font-size:19px' href='goods.php?id=".$row['id']."&uid=".$_REQUEST['uid']."'><div class='searchd'><img  src='".$row['picture']."' width='200px'></div>".$row['goods_name'].'<br>'.$row['price']."</a></li>";
    }else {
      echo "<li class='search'><a style = 'font-size:19px' href='goods.php?id=".$row['id']."'><div class='searchd'><img  src='".$row['picture']."' width='200px'></div>".$row['goods_name'].'<br>'.$row['price']."</a></li>";
    }
    // echo "<hr>";
  }
}else{
  echo "没有搜索到关于：".$keywords;
}
}else {
  //不包含关键词，显示全部商品
  echo "all goods";
}


 ?>
</ul>
</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
<?php
include 'db_close.php';
 ?>
