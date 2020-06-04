<?php
session_start();
/*if (!isset($_REQUEST['uid'])) {
  echo "非法访问！";
  exit;
}
$uid = $_REQUEST['uid'];
if(isset($_SESSION['uid'.$uid]))
{
	unset($_SESSION['uid'.$uid]);
}*/
header("Location: ../index.php");
