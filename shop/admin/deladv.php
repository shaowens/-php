<?php
include '../conn.php';

$advid = $_REQUEST['adid'];

$sql = "delete from adv where id = ".$advid;
if ($conn->query($sql)) {
  //删除成功
  return 1;
}else {
  //删除失败
  return 0;
}
