<?php
require_once('../adminOperator/dbconfig.php');
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$adminEmail = $_SESSION['Email'];
if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}

//--use to get the Admin Profile--//
$res = new AdminHandler();
$result = $res->getAdmin($adminEmail);
?>
<html>
<head>
	<title>Admin Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global.css">
</head>
<body style = "background:url('../../assets/img/Beautiful_Background/29.jpg');background-attachment:fixed">
	<div class = "container">
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
		<div class="container">
			<div class = "span12" style = "margin-top:60px">
				<div class = "page-header">
					<h2 class = "font9">Your Profile</h2>
				</div>
				<div class = "columns">
					<div class="span12">
						<div class="thumbnail span5 pull-left" style = "width:300px;height:300px">
							<div id = "picture"><input type = "picture" class = "adminPict" value = "<?php echo $result['profile_pict']; ?>"></div>
						</div>
						<div class="span5 pull-right">
							<div class="row pull-left">
								<form method = "POST" action = "#">
									<table align = "center" style = "margin-top:20px">
										<tr>
											<td><input type = "hidden" value = "<?php echo $result['admin_id'];?>" /></td>
										</tr>
										<tr>
											<td class = "adminfont">First Name:&nbsp;</td>
											<td><input type = "text" class = "btn" name = "f_name" value = "<?php echo $result['First_name']; ?>" /></td>
										</tr>
										<tr>
											<td class = "adminfont">Last Name:&nbsp;</td>
											<td><input type = "text" class = "btn" name = "l_name" value = "<?php echo $result['Last_name']; ?>" /></td>
										</tr>
										<tr>
											<td class = "adminfont">Email Address:&nbsp;</td>
											<td><input type = "text" class = "btn" name = "email" value = "<?php echo $result['Email']; ?>" /></td>
										</tr>
										<tr>
											<td class = "adminfont">Password:&nbsp;</td>
											<td><input type = "text" class = "btn" name = "password" value = "<?php echo $result['Password']; ?>" /></td>
										</tr>
									</table>
								</form>
								<table align = "center">
									<tr>
										<td><a class = "btn btn-primary" href = "adminProfUpdate.php?id=<?=$result['admin_id'];?>"/>Edit Profile</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src = "../../assets/js/jquery.1.10.2.js"></script>	
<script src = "../js/my_java.js"></script>
</body>
</html>