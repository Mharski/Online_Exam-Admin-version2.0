<?php 
require_once('../adminOperator/dbconfig.php');

$user_fname = (isset($_POST['User_fname']) && !empty($_POST['User_fname']) ? $_POST['User_fname']:false);
$user_lname = (isset($_POST['User_lname']) && !empty($_POST['User_lname']) ? $_POST['User_lname']:false);
$user_email = (isset($_POST['User_email']) && !empty($_POST['User_email']) ? $_POST['User_email']:false);
$user_pass = (isset($_POST['User_pass']) && !empty($_POST['User_pass']) ? $_POST['User_pass']:false);

$arr = array(
	'_addfname' => $user_fname,
	'_addlname' => $user_lname,
	'_addemail' => $user_email,
	'_addpass' => $user_pass);

//--use by Admin to add User--//
$res = new AdminDAO();
$result = $res->addAdminUser($arr['_addfname'],$arr['_addlname'],$arr['_addemail'],$arr['_addpass']);

if ($result === false) {
	echo "<script>alert('Failed to Add User Account!');window.location.href='adminviewUser.php';</script>";
} else {
	echo "<script>alert('Successfully Add User Account!');window.location.href='adminviewUser.php';</script>";
}
 ?>