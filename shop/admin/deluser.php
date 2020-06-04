<?php
include '../conn.php';

$uid = $_REQUEST['uid'];

$sql = "delete from user where id = ".$uid;
if ($conn->query($sql)) {
  //删除成功
  return 1;
}else {
  //删除失败
  return 0;
}
