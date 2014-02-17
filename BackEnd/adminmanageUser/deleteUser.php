<?php 
require_once('../adminOperator/dbconfig.php');

$delId = (isset($_GET['id']) ? $_GET['id']:false);

//--use to delete the selected ID--//
$res = new AdminHandler();
$result = $res->admindeleteUser($delId);

if ($result === false) {
	echo "<script>alert('Fail to delete User Account!');window.location.href='adminviewUser.php';</script>";
} else {
	echo "<script>alert('Successfully Deleted User Account!');window.location.href='adminviewUser.php';</script>";
}
 ?>