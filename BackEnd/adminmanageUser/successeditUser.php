<?php 
require_once('../adminOperator/dbconfig.php');

$userId = (isset($_POST['editUserId']) ? $_POST['editUserId']:false);
$userFname = (isset($_POST['editUserfname']) ? $_POST['editUserfname']:false);
$userLname = (isset($_POST['editUserlname']) ? $_POST['editUserlname']:false);
$userEmail = (isset($_POST['editUserEmail']) ? $_POST['editUserEmail']:false);
$userPass = (isset($_POST['editUserPass']) ? $_POST['editUserPass']:false);
// echo "<script>alert('".$userFname."');</script>";
$arr = array(
	'_editId' => $userId,
	'_editF' => $userFname,
	'_editL' => $userLname,
	'_editE' => $userEmail,
	'_editP' => $userPass
	);

//--use to save the updated data in the database ...--//
$res = new AdminHandler();
$result = $res->adminEditUser($arr['_editId'],$arr['_editF'],$arr['_editL'],$arr['_editE'],$arr['_editP']);

if ($result === false) {
	echo "<script>alert('Failed to Update Data!');window.location.href='adminviewUser.php';</script>";
} else {
	echo "<script>alert('Successfully Update Data!');window.location.href='adminviewUser.php';</script>";

}
 ?>