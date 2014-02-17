<?php 
require_once('../adminOperator/dbconfig.php');

$update_id = (isset($_POST['adminId']) ? $_POST['adminId']:false);
$update_Fname = (isset($_POST['adminFname']) ? $_POST['adminFname']:false);
$update_Lname = (isset($_POST['adminLname']) ? $_POST['adminLname']:false);
$update_Email = (isset($_POST['adminEmail']) ? $_POST['adminEmail']:false);
$update_Pass = (isset($_POST['adminPass']) ? $_POST['adminPass']:false);
$update_Profile = (isset($_POST['adminProfile']) ? $_POST['adminProfile']:false);

$arr = array(
	'adminI' => $update_id,
	'adminF' => $update_Fname,
	'adminL' => $update_Lname,
	'adminE' => $update_Email,
	'adminP' => $update_Pass,
	'adminProf' => $update_Profile
	);

//--use to successfully update and edit Admin Profile--//
$res = new AdminHandler();
$result = $res->updateAdminProfile($arr['adminI'],$arr['adminF'],$arr['adminL'],$arr['adminE'],$arr['adminP'],$arr['adminProf']);

if ($result === false) {
	echo "<script>alert('Unable to Update Profile!');window.location.href='adminProfile.php';</script>";
} else {
	echo "<script>alert('Successfully Update Profile!');window.location.href='adminProfile.php';</script>"; 
}
 ?>