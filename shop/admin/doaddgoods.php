<?php
//检测表单字段是否为空
if (!isset($_REQUEST['goodsname'])) {
  echo "请输入商品名称！";
  exit;
}
if (!isset($_REQUEST['type'])) {
  echo "请输入商品类型名！";
  exit;
}
if (!isset($_REQUEST['oldprice'])) {
  echo "请输入商品旧价格";
  exit;
}
if (!isset($_REQUEST['price'])) {
  echo "请输入商品价格！";
  exit;
}
if (!isset($_REQUEST['desc'])) {
  echo "请输入商品描述!";
  exit;
}
if (!isset($_REQUEST['picture'])) {
  echo "请输入商品图片地址！";
  exit;
}

$goods_name = $_REQUEST['goodsname'];
$type = $_REQUEST['type'];
$old_price = $_REQUEST['oldprice'];
$description = $_REQUEST['desc'];
$price = $_REQUEST['price'];
$_picture = $_REQUEST['picture'];

include '../conn.php';
$sql = "insert into goods(goods_name,type,price,description,old_price,picture)"
      ." values('".$goods_name."','".$type."',".$price.",'".$description."',"
      .$old_price.",'".$picture."')";

if($conn->query($sql)=== TRUE){

    header("Location: goodslist.php");

}else{
  echo '添加商品失败！';
}
