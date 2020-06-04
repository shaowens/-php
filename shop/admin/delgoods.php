<?php
include '../conn.php';

$gid = $_REQUEST['gid'];

$sql = "delete from goods where id = ".$gid;
if ($conn->query($sql)) {
  //删除成功
  return 1;
}else {
  //删除失败
  return 0;
}
