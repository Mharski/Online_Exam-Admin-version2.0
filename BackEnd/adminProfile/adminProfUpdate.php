<?php 
require_once('../adminOperator/dbconfig.php');
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$adminEmail = $_SESSION['Email'];
if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
} else {
	header($_SERVER['PHP_SELF']);
}

$adminId = (isset($_GET['id']) ? $_GET['id']:false);

//--use to edit or update Admin Profile--//
$res = new AdminHandler();
$result = $res->getUpdateAdmin($adminId);

 ?>
<html>
<head>
	<title>Update Admin Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global.css">
</head>
<body style = "background:url('../../assets/img/Beautiful_Background/29.jpg');background-attachment:fixed">
	<div class="container">
		<div class="navbar navbar-fixed-top">
			<div style = "background:url('../../assets/img/Beautiful_Background/40.jpg')" class = "background">
				<div class = "span4 pull-left">
					<h1 class = "font"><img src="../../assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
				</div>
				<div class="span4 pull-right">
					<nav class = "nav pull-right" style = "margin-top:10px">
						<ul class = "nav nav-pills">
							<li><a href="#"><h3><span><?= $Admin_Fname ?>&nbsp;<?= $Admin_Lname ?></span></h3></a></li>
							<li class = "adminfont1"><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b></li>
							<li><a href="../adminOperator/logOut.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="span5 container" style = "float:center;margin-top:60px">
			<div class="page-header">
				<h3 align = "center" class = "font9">Edit Profile</h3>
			</div>
			<form method = "POST" action = "adminProfAuthen.php">
				<table align = "center" class = "tableAdmin">
					<tr>
						<td><input type = "hidden" name = "adminId" value = "<?php echo $result['admin_id']; ?>" /></td>
					</tr>
					<tr>
						<td class = "adminfont">First Name:&nbsp;</td>
						<td><input type = "text" class = "btn" name = "adminFname" value = "<?php echo $result['First_name']; ?>" /></td>
					</tr>
					<tr>
						<td class = "adminfont">Last Name:&nbsp;</td>
						<td><input type = "text" class = "btn" name = "adminLname" value = "<?php echo $result['Last_name']; ?>" /></td>
					</tr>
					<tr>
						<td class = "adminfont">E-mail Address:&nbsp;</td>
						<td><input type = "text" class = "btn" name = "adminEmail" value = "<?php echo $result['Email']; ?>" /></td>
					</tr>
					<tr>
						<td class = "adminfont">Password:&nbsp;</td>
						<td><input type = "text" class = "btn" name = "adminPass" value = "<?php echo $result['Password']; ?>" /></td>
					</tr>
					<tr>
						<td class = "adminfont">Profile Picture:&nbsp;</td>
						<td><input type = "file" name = "adminProfile" value = "<?php echo $result['profile_pict']; ?>" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<div class="pull-right" style = "margin-top:30px">
								<input type = "submit" class = "btn btn-success" value ="Edit Profile" />
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<script src = "../../assets/js/jquery.1.10.2.js"></script>	
	<script src = "../js/my_java.js"></script>
</body>
</html>