<?php 
ob_start();
session_start();
	require_once('../adminOperator/dbconfig.php');
	$email = mysql_real_escape_string($_POST['emailadd']);
	$pass = mysql_real_escape_string($_POST['password']);

	//--use to Authenticate Admin Log In ...--//
	$results = new AdminHandler();
	$result = $results->adminLogIn($email,$pass);

	if ($result['Email'] == $email && $result['Password'] == $pass){
		$_SESSION['Email'] = $result['Email'];
		$_SESSION['Admin_Fname'] = mysql_real_escape_string($result['First_name']);
		$_SESSION['Admin_Lname'] = mysql_real_escape_string($result['Last_name']);
		session_write_close();
		echo "<script>alert('Successfully Log In!');window.location.href='../adminfrontPage/adminPanel.php';</script>";
	}else{
		echo "<script>alert('Wrong email or Password');window.location.href='../index.php';</script>'";
	}
 ?>