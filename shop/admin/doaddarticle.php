<?php
//检测表单字段是否为空
if (!isset($_REQUEST['title'])) {
  echo "请输入文章标题！";
  exit;
}
if (!isset($_REQUEST['author'])) {
  echo "请输入作者！";
  exit;
}
if (!isset($_REQUEST['content'])) {
  echo "请输入文章内容！";
  exit;
}


$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$content = $_REQUEST['content'];
$time = date('y-m-d h:i:s',time());

include '../conn.php';
$sql = "insert into wenzhang(title,content,author,time)"
      ." values('".$title."','".$content."','".$author."','".$time."')";

if($conn->query($sql)=== TRUE){

    header("Location: articlelist.php");

}else{
  echo '添加文章失败！:error:add article failed!';
}
