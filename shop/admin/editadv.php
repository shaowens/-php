<?php
include '../conn.php';
//获取商品id
$adv_id = $_REQUEST['advid'];

$sql = "select * from adv where id = ".$adv_id;
?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <meta name="description" content=""> -->
    <!-- <meta name="author" content=""> -->
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>广告编辑</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">后台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="main.php">首页</a></li>
            <li><a href="goodslist.php">商品管理</a></li>
            <li><a href="userlist.php">用户管理</a></li>
            <li><a href="articlelist.php">文章管理</a></li>
            <li class="active"><a href="advlist.php">广告管理</a></li>
              <li><a href="orderlist.php">订单管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">进入前台 <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">


<br><br><br><br>
        <table class="table table-striped">
        <thead>
          <tr>
            <th colspan="2">广告编辑</th>

          </tr>
        </thead>
        <tbody>
          <form class="" action="doeditadv.php?advid=<?php echo $adv_id?>" method="post">
          <?php


          $result = $conn->query($sql);

          if ($result->num_rows>0) {
            //存在该商品
            while ($row=$result->fetch_assoc()) {

?>


    <tr>
      <td>广告名称</td>
      <td><input type="text" name="advsname" value="<?php echo $row['name']?>"></td>
    </tr>

    <tr>
      <td>关键词</td>
      <td><input type="text" name="key" value="<?php echo $row['keywords']?>"></td>
    </tr>

    <tr>
      <td>图片地址</td>
      <td><input type="text" name="picture" value="<?php echo $row['picture']?>"></td>
    </tr>

    <tr>
      <td>链接</td>
      <td><input type="text" name="link" value="<?php echo $row['link']?>"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-info" name="" value="更新"></td>
    </tr>
    <?php


  }
  }else{
  echo "不存在该广告！";
  }
     ?>
  </form>
    </tbody>
  </table>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
