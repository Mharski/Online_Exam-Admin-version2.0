<?php 
session_start();

if (isset($_SESSION['Email'])){
	header('Location: adminfrontPage/adminPanel.php');
} 
 ?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/global.css">
</head>
<body style = "background:url('../assets/img/Beautiful_Background/29.jpg')">
<div class="container">
	<div class="navbar navbar-fixed-top">
		<div style = "background:url('../assets/img/Beautiful_Background/40.jpg')" class = "background">
			<div class = "span4 pull-left">
				<h1 class = "font"><img src="../assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
			</div>
		</div>
	</div>
	<div class="span12 container" style = "float:center">
		<div class="span5" id= "adminLogIn">
			<div class="page-header" style = "margin-top:150px">
				<h2 class = "font2">Admin</h2>
			</div>
			<div>
				<form method = "POST" action = "adminOperator/adminLogInAuth.php" class = "form">
					<table align = "center">
						<tr>
							<td class = "font2">E-mail:&nbsp;</td>
							<td><input type = "text" name = "emailadd" id = "email" class = "btn" /></td>
							<td><div id = 'xemail'></div></td>
						</tr>
						<tr>
							<td class = "font2">Password:&nbsp;</td>
							<td><input type = "password" name = "password" id = "pass" class = "btn" /></td>
							<td><div id = 'xpass'></div></td>
						</tr>
					</table>
					<div style = "margin-top:20px">
						<center>
							<tr>
								<td>
									<input type = "submit" class = "btn btn-primary" id = "login" value = "Log In" />
								</td>
							</tr>
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src = "../assets/js/jquery.1.10.2.js"></script>	
<script src = "js/my_java.js"></script>
</body>
</html>