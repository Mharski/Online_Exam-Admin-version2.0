<?php 
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}
require_once('../adminOperator/dbconfig.php');

$UserId = (isset($_GET['id']) ? $_GET['id']:false);

//--use to view all Users--//
$res = new AdminHandler();
$result = $res->adminviewUser($UserId);

if ($result === false) {
	return false;
} else {
 ?>
<html>
<head>
	<title>View User</title>
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
 				<!-- <div class="span2 pull-right">
 					<nav class = "nav" style = "margin-top:10px">
 						<ul class = "nav nav-tabs">
 							<li class = "pull-right"><a href="logOut.php">Log Out</a></li>
 						</ul>
 					</nav>
 				</div> -->
 			</div>
 		</div>
 		<div class="container">
 			<div class = "span7 offset3" style = "margin-top:80px">
 				<div class = "page-header">
 					<h2 class = "font9">View User</h2>
 				</div>
 				<div class = "thumbnail span7" style = "width:500px;">
					<table align = "center" class = "margTable table-striped table-condensed" style = "width:400px">
						<tr>
							<td class="widList"><b><label><font class = "viewfontAdmin">First Name:&nbsp;&nbsp;</font></label><b></td>
							<td><label><font class = "viewfontAdmin"><?php echo $result['first_name'] ?></font></label></td>
						</tr>
						<tr>
							<td class="widList"><b><label><font class = "viewfontAdmin">Last Name:&nbsp;&nbsp;</font></label><b></td>
							<td><label><font class = "viewfontAdmin"><?php echo $result['last_name'] ?></font></label></td>
						</tr>
						<tr>
							<td class="widList"><b><label><font class = "viewfontAdmin">Email Address:&nbsp;&nbsp;</font></label><b></td>
							<td><label><font class = "viewfontAdmin"><?php echo $result['email'] ?></font></label></td>
						</tr>
						<tr>
							<td class="widList"><b><label><font class = "viewfontAdmin">Password:&nbsp;&nbsp;</font></label><b></td>
							<td><label><font class = "viewfontAdmin"><?php echo $result['password'] ?></font></label></td>
						</tr>
					</table>
					<hr>
					<div class="pull-right">
						<a class = "btn btn-success" href = "adminviewUser.php"> << Back </a>
					</div>
 				</div>
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