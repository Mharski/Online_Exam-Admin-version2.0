<?php
require_once('Admin.php');
require_once('AdminDAO.php');
require_once('AdminHandler.php');

$config = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'online_exam'
);

$db = new mysqli(
	$config['host'],
	$config['username'],
	$config['password'],
	$config['database']
);

if (mysqli_connect_errno()){
	echo 'An occured Error';
	exit;
}
 ?>