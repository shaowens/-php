<?php
session_start();
include '../conn.php';
include 'function.php';

if (!isset($_REQUEST['uid'])) {
  echo "非法访问！";
  exit;
}
$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = ".$uid;
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
  <title>我的订单</title>
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
<div class="container w1100">

      <br>  <br>  <br>  <br>

      <?php
      $file = $_FILES['file'];//得到传输的数据
      //得到文件名称
      $name = $file['name'];
      $type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
      $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
      //判断文件类型是否被允许上传
      if(!in_array($type, $allow_type)){
        //如果不被允许，则直接停止程序运行
        return ;
      }
      //判断是否是通过HTTP POST上传的
      if(!is_uploaded_file($file['tmp_name'])){
        //如果不是通过HTTP POST上传的
        return ;
      }
      $upload_path = "./touxiang/"; //上传文件的存放路径
      //开始移动文件到相应的文件夹
      if(move_uploaded_file($file['tmp_name'],$upload_path.$file['name'])){
        if (updateAvatar($conn,$uid,$name)) {
            echo "头像上传成功!";
            exit;
        }
        echo "头像上传失败!";
        exit;
      }else{
        echo "头像上传失败!";
      }
?>
</div>
<!-- 页脚开始 -->
<?php include '../footer.php'; ?>
