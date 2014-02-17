<?php 
require_once('../adminOperator/dbconfig.php');

$delId = (isset($_GET['id']) ? $_GET['id']:false);

//--use to delete the selected data of question--//
$res = new AdminHandler();
$result = $res->deleteQuestion($delId);

if ($result === false) {
	echo "<script>alert('Fail to delete Question!');window.location.href='manageAdmin.php';</script>";
} else {
	echo "<script>alert('Successfully Deleted Question!');window.location.href='manageAdmin.php';</script>";
}
 ?>