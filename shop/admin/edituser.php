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

    <title>编辑用户</title>

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
            <li class="active"><a href="userlist.php">用户管理</a></li>
            <li><a href="articlelist.php">文章管理</a></li>
            <li><a href="advlist.php">广告管理</a></li>
              <li><a href="orderlist.php">订单管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/" >进入前台</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <br><br><br><br><br>
                <table class="table">
        <thead>
          <tr>
            <th colspan="2">编辑用户</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $uid = $_REQUEST['uid'];
          $sql = "select * from user where id = ".$uid;
          $result = $conn->query($sql);
          if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {

           ?>
          <form class="" action="doedituser.php?uid=<?php echo $row['id']?>" method="post">
    <tr>
      <td>用户名：</td>
      <td>
        <input type="text" name="username" value="<?php echo $row['uname']?>">
      </td>
    </tr>

    <tr>
      <td>密码：</td>
      <td>
        <input type="text" name="password" value="<?php echo $row['pwd']?>">
      </td>
    </tr>

    <tr>
      <td>手机号：</td>
      <td>
        <input type="text" name="tel" value="<?php echo $row['tel']?>">
      </td>
    </tr>

    <tr>
      <td>性别：</td>
      <td>
        <select class="select" name="sex">
          <option value="男">男</option>
          <option value="女">女</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>邮件：</td>
      <td>
        <input type="text" name="email" value="<?php echo $row['email']?>">
      </td>
    </tr>

    <tr>
      <td>地址：</td>
      <td>
        <input type="text" name="address" value="<?php echo $row['address']?>">
      </td>
    </tr>
<?php
      }
    }
 ?>
<tr>
  <td colspan="2">
    <input type="submit" class="btn btn-success" value="更新">
  </td>
</tr>

</form>
    </tbody>
  </table>
    </div> <!-- /container -->



    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
