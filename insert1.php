<?php
ob_start();
session_start();
	require_once('dbconfig.php');
	$emailadd = mysql_real_escape_string($_POST['emailadd']);
	$pass = mysql_real_escape_string($_POST['passwork']);

	//--use to validate whether the Email or Password is Existing, then, success Log In--//
	$res = new ExamHandler();
	$result = $res->getUser($emailadd, $pass);
	
	if ($result['email'] == $emailadd && $result['password'] == $pass) {
		$_SESSION['email'] = mysql_real_escape_string($result['email']);
		$_SESSION['F_name'] = mysql_real_escape_string($result['first_name']);
		$_SESSION['L_name'] = mysql_real_escape_string($result['last_name']);
		session_write_close();
		echo "<script>alert('Successfully Log In!');window.location.href='Online_test.php';</script>";
	} else {
		echo "<script>alert('Wrong email or Password!');window.location.href='index.php';</script>'";		
	}
?>