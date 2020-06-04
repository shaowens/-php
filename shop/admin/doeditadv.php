
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

    <title>更新</title>

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

    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/jquery.js"></script>

  </head>
  <?php
  include '../conn.php';
  //获取表单数据
  $adv_id =  $_REQUEST['advid'];
  $adv_name = $_REQUEST['advsname'];
  $key_word = $_REQUEST['key'];
  $pic = $_REQUEST['picture'];
  $link = $_REQUEST['link'];

  $sql = "update adv set name = '".$adv_name."',keywords='".$key_word."',picture='".$pic."',link='".$link."' where id = ".$adv_id;

  ?>
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
            <li><a href="userlist.php">用户列表</a></li>
            <li><a href="articlelist.php">文章列表</a></li>
            <li><a href="/goodslist.php">商品列表</a></li>
            <li class="active"><a href="advlist.php">广告列表</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">进入前台 <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">


<br><br><br><br>
        <?php
        if ($conn->query($sql)) {
          echo "更新成功！正在跳转...";
          ?>
<script type="text/javascript">
  //休眠5秒，跳转广告列表
  $(function() {
    sleep(500);
    location.href="advlist.php";
  });

  function sleep(n) { //n表示的毫秒数
         var start = new Date().getTime();
         while (true) if (new Date().getTime() - start > n) break;
     }
</script>
          <?php
        }else {
          echo "更新失败，请返回重试！";
        }
         ?>
    </div> <!-- /container -->




  </body>
</html>
<?php include '../db_close.php'; ?>
