<?php 
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}

require_once('../adminOperator/dbconfig.php');

$editUser = (isset($_GET['id']) ? $_GET['id']:false);

//--use to get Data of the entity you want to edit ...--//
$res = new AdminHandler();
$result = $res->getEditUser($editUser);

if (empty($result)) {
	return false;
	echo "<script>alert('Failed to render Data!');window.location.href='adminviewUser.php';</script>";
} else {

 ?>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global.css">
</head>
<body style = "background:url('../../assets/img/Beautiful_Background/29.jpg')">
	<div class = "container">
		<div class="navbar navbar-fixed-top">
			<div style = "background:url('../../assets/img/Beautiful_Background/40.jpg')" class = "background">
				<div class = "span4 pull-left">
					<h1 class = "font"><img src="../../assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
				</div>
				<div class="span4 pull-right">
				<nav class = "pull-right" style = "margin-top:10px">
					<form method = "POST">
					<ul class = "nav nav-tabs">
						<li><a href="#" id = "adminChoices"><h3><span><?= $Admin_Fname ?>&nbsp;<?= $Admin_Lname ?></span></h3></a></li>
						<li class = "adminfont1"><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b></li>
						<li><a href="../adminOperator/logOut.php">Log Out</a></li>
					</ul>
					</form>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<div class = "span12" style = "margin-top:80px">
			<div class = "page-header">
				<h2 class = "font9">Edit User</h2>
			</div>
			<div class="span11">
				<form method = "POST" action = "successeditUser.php">
					<table align = "center" class = "margTable">
						<tr>
							<td><input type = "hidden" name = "editUserId" value = "<?php echo $result['id'] ?>" /></td>
						</tr>
						<tr>
							<td><label><font class = "viewfontAdmin">First Name:</font></label></td>
							<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "editUserfname" value = "<?php echo $result['first_name'] ?>" /></font></td>
						</tr>
						<tr>
							<td><label><font class = "viewfontAdmin">Last Name:</font></label></td>
							<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "editUserlname" value = "<?php echo $result['last_name'] ?>"></font></td>
						</tr>
						<tr>
							<td><label><font class = "viewfontAdmin">Email Address:</font></label></td>
							<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "editUserEmail" value = "<?php echo $result['email'] ?>"></font></td>
						</tr>
						<tr>
							<td><label><font class = "viewfontAdmin">Password:</font></label></td>
							<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "editUserPass" value = "<?php echo $result['password'] ?>"></font></td>
						</tr>
					</table>
					<hr>
					<div class="pull-right">
						<input type = "submit" class = "btn btn-success" value ="Update User" />
					</div>
				</form>
			</div>
		</div>
	</div>
<script src = "../../assets/js/jquery.1.10.2.js"></script>	
<script src = "../js/my_java.js"></script>
</body>
</html>
 <?php 	
} 
?>