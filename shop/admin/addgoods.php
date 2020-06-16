<?php
include '../conn.php';

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

    <title>添加货物</title>

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
            <li class="active"><a href="goodslist.php">商品管理</a></li>
            <li><a href="userlist.php">用户管理</a></li>
            <li><a href="articlelist.php">文章管理</a></li>
            <li><a href="advlist.php">广告管理</a></li>
              <li><a href="orderlist.php">订单管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">进入前台 <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <br><br>
      <br><br><br>
      <table class="table ">


        <thead>
          <tr>
            <th colspan="2">添加货物</th>
          </tr>
        </thead>
        <tbody>

<form class="" action="doaddgoods.php" method="post">

    <tr>
      <td>商品名称：</td>
      <td><input type="text" name="goodsname" value=""></td>
    </tr>
    <tr>
      <td>商品类型：</td>
      <td><input type="text" name="type" value=""></td>
    </tr>
    <tr>
      <td>旧价格：</td>
      <td><input type="text" name="oldprice" value=""></td>
    </tr>
    <tr>
      <td>商品价格：</td>
      <td><input type="text" name="price" value=""></td>
    </tr>
    <tr>
      <td>商品描述：</td>
      <td><input type="text" name="desc" value=""></td>
    </tr>
    <tr>
      <td>图片地址：</td>
      <td><input type="text" name="picture" value=""></td>
    </tr>
    <tr colspan="2">
      <td>
        <input type="submit" class="btn btn-success" value="添加">
      </td>
    </tr>
  </form>

    </tbody>
  </table>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
