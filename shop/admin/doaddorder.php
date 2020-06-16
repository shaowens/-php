<?php
//检测表单字段是否为空
if (!isset($_REQUEST['id'])) {
    echo "请输入id！";
    exit;
}
if (!isset($_REQUEST['user_id'])) {
    echo "请输入用户id！";
    exit;
}
if (!isset($_REQUEST['goods_id'])) {
    echo "请输入商品id";
    exit;
}
if (!isset($_REQUEST['count'])) {
    echo "请输入商品数量！";
    exit;
}

$id = $_REQUEST['id'];
$user_id = $_REQUEST['user_id'];
$goods_id = $_REQUEST['goods_id'];
$count = $_REQUEST['count'];

include '../conn.php';
$sql = "insert into orders(id,user_id,goods_id,count)"
    ." values('".$id."','".$user_id."',".$goods_id.",'".$count."')";

if($conn->query($sql)=== TRUE){

    header("Location: orderlist.php");

}else{
    echo '添加商品失败！';
}
