<?php
include '../conn.php';

$article_id = $_REQUEST['aid'];

$sql = "delete from wenzhang where id = ".$article_id;
if ($conn->query($sql)) {
  //删除成功
  return 1;
}else {
  //删除失败
  return 0;
}
