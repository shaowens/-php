<?php
session_start();
include 'conn.php';

$flag=0;

 ?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <link rel="icon" href="./images/icon.ico"> -->
<link rel="stylesheet" type="text/css" href="./css/general.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/general.js"></script>
<script type="text/javascript" src="./js/carousel.js"></script>
<title>服装商城</title>
</head>
<body>
<!-- 顶部开始 -->


<!-- 头部开始 -->
<?php include 'header.php'; ?>

<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">
  <div class="module cut">
    <!-- 商品分类开始 -->
    <div class="catebar w210 fl">
</div>
    <!-- 商品分类结束 -->
    <!-- 轮播图片广告开始 -->
    <div class="w640 fl cut"><div class="carousel cut">
  <div class="carousel-imgs cut">
    <?php
      $sql = "select * from adv";

      $result = $conn->query($sql);
      if ($result->num_rows>0) {
        $count = $result->num_rows;
        while ($row=$result->fetch_assoc()) {
?>
          <a href="<?php echo $row['link']?>" style="display: block;">
          <img src="<?php echo $row['picture']?>" width="630" height="240"  border="0">
          </a>
<?php
        }
        ?>

        <ul class="carousel-tog">
        <?php
        while ($count>0) {
          ?>
          <li class="cur"><?php echo $count ?></li>
          <?php
          $count -= 1;
        }
 ?>

 </ul>
<?php
      }
     ?>

</div>

</div></div>
    <!-- 轮播图片广告结束 -->
    <!-- 资讯开始 -->
    <div class="w240 fr cut">
      <div class="news mt10" style="height: 240px">
        <h2><a href="articles.php<?php
          if (isset($_REQUEST['uid'])) {
            echo '?uid='.$_REQUEST['uid'];
          }
        ?>" class="fr">更多 <i>&gt;</i></a>最新资讯</h2>
                <ul>
                  <?php
                  $sql = "SELECT * FROM wenzhang limit 5";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // 输出每行数据
                      while($row = $result->fetch_assoc()) {
                   ?>
                    <li><a  href="article.php?wzid=<?php echo $row['id'];
                      if (isset($_REQUEST['uid'])) {
                        echo '&uid='.$_REQUEST['uid'];
                      }
                    ?>"><?php echo $row['title'] ?></a></li>
                    <?php
                  }
                }
                     ?>
                  </ul>
              </div>
      <!-- 广告位(240x70)开始 -->
      <!-- <div class="module mt10"></div> -->
      <!-- 广告位(240x70)结束 -->
    </div>
    <!-- 资讯结束 -->
  </div>
  <!-- 新品上市开始 -->
  <div class="module mt30 cut">
    <div class="gli_t"><h2 class="fl">所有商品</h2></div>
    <div class="gli w1110">
            <ul>
<?php
$sql = "SELECT * FROM goods";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {

        ?>
        <li>
      <div class="im"><a href="goods.php?id=<?php echo $row["id"];
          if($flag==1){
            echo '&uid='.$uid;
          }
      ?>"><img  src="<?php echo $row['picture']?>"></a></div>
      <h3><a href="goods.php?id=<?php echo $row["id"];
      if($flag==1){
        echo '&uid='.$uid;
      }
      ?>">
<?php
echo $row["goods_name"];
 ?>
      </a></h3>
      <del> <p class="price"><i>原价¥</i>
<?php
echo $row["old_price"]
 ?>
      </p></del>
      <p class="price"><i>现价t¥</i>
<?php
echo $row["price"]
 ?>
      </p>
      </li>
        <?php
    }
} else {
    echo "0 个结果";
}
 ?>
          </ul>
          </div>
  </div>



<?php include 'footer.php'; ?>
