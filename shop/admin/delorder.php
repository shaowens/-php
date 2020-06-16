<?php
include '../conn.php';

$id = $_REQUEST['id'];

$sql = "delete from orders where id = ".$id;
if ($conn->query($sql)) {
    //删除成功
    return 1;
}else {
    //删除失败
    return 0;
}
