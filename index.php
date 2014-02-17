<?php
session_start();
if (isset($_SESSION['email'])) {
	header('Location: Online_test.php');
}
 ?>
<html>
<head>
	<title>Online Exam</title>
	<link rel="stylesheet" type="text/css" href="assets/css/my_style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
</head>
<body style = "background:url('assets/img/Beautiful_Background/29.jpg')">
	<div id = "overlay1"></div>
		<div id = "RegistrationForm" class = "btn">
			<div class="span6" id = "StartRegistration">
				<div class="pull-right">
					<a id="close" href="#" data-dismiss="alert" class = "pull-right fontS">X</a>
				</div>
				<div class="page-header" style = "margin-top:50px">
					<h2 class = "font2" align = "center">Registration Form</h2>
				</div>
				<div id = "Registration">
					<form method = "POST" action = "insert.php" class = "form">
						<table align = "center">
							<tr>
								<td><div id = 'xfname'></div></td>
								<td>&nbsp;&nbsp;</td>
								<td class = "font2">First Name:&nbsp;</td>
								<td><input type = "text" name = "f_name" class = "btn" id = "fname" autofocus /></td>
							</tr>
							<tr>
								<td><div id = 'xlname'></div></td>
								<td>&nbsp;&nbsp;</td>
								<td class = "font2">Last Name:&nbsp;</td>
								<td><input type = "text" name = "l_name" class = "btn" id = "lname" /></td>
							</tr>
							<tr>
								<td><div id = 'xemailadd'></div></td>
								<td>&nbsp;&nbsp;</td>
								<td class = "font2">E-mail:&nbsp;</td>
								<td><input type = "text" name = "email" class = "btn" id = "Email"/></td>
							</tr>
							<tr>
								<td><div id = 'xpassword'></div></td>
								<td>&nbsp;&nbsp;</td>
								<td class = "font2">Password:&nbsp;</td>
								<td><input type = "password" name = "password" class = "btn" id = "Password"/></td>
							</tr>
							<tr>
								<td><div id = 'xcon_password'></div></td>
								<td>&nbsp;&nbsp;</td>
								<td class = "font2">Confirm Password:&nbsp;</td>
								<td><input type = "password" name = "confirmPass" class = "btn" id = "Confpass" /></td>
							</tr>
						</table>
						<div>
							<center>
								<button class = "btn btn-primary" id = 'validate'>Register</button>
								<button type = 'reset' class = 'btn btn-warning' id = 'reset' />Reset</button>
							</center>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="navbar navbar-fixed-top">
				<div style = "background:url('assets/img/Beautiful_Background/40.jpg')" class = "background">
					<div class = "span4 pull-left">
						<h1 class = "font"><img src="assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
					</div>
					<div class="span2 pull-right">
						<nav class = "nav nav-pills">
							<ul class = "nav">

							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="container pull-left">
				<div class="span5" id = "StartLogIn">
					<div class="page-header" style = "margin-top:150px">
						<h2 class = "font2">Log In</h2>
					</div>
					<div>
						<form method = "POST" action = "insert1.php" class = "form">
							<table align = "center">
								<tr>
									<td class = "font2">E-mail:&nbsp;</td>
									<td><input type = "text" name = "emailadd" id = "email" class = "btn" /></td>
									<td><div id = 'xemail'></div></td>
								</tr>
								<tr>
									<td class = "font2">Password:&nbsp;</td>
									<td><input type = "password" name = "passwork" id = "pass" class = "btn" /></td>
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
					<div class = "pull-right">
						<span class = "font10"><u>Don't have an Account?</u></span>
						<tr>
							<td>
								<button class = "btn btn-info" id = "registers">Register Now</button>
							</td>
						</tr>
					</div>
				</div>
				<div class = "span5 pull-right" style = "margin-top:100px">
					<div>
						<img src="assets/img/ched.png" class = "pull-right" style = "height:400px;width:400px">
					</div>
				</div>
			</div>
		</div>
<script src = "assets/js/jquery.1.10.2.js"></script>
<script src = "assets/js/my_js.js"></script>
<script src = "assets/js/ajax.js"></script>

</body>
</html>