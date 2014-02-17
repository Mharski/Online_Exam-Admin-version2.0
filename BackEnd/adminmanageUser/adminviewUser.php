<?php 
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}
require_once('../adminOperator/dbconfig.php');

//--use to get all registered user--//
$res = new AdminHandler();
$result = $res->getadminUser();
 ?>
<html>
<head>
	<title>View User</title>
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global.css">
</head>
<body style = "background:url('../../assets/img/Beautiful_Background/29.jpg')">
	<div id = "overlay1"></div>
	<div id="adminUserAdd">
		<div class="page-header">
			<h2 align = "center">Add User Account</h2>
		</div>
		<div id="adminUser">
			<form method = "POST" action = "adminAddUser.php">
				<table align = "center" style = "margin-top:50px">
					<tr>
						<td><span>First Name:</span>&nbsp;</td>
						<td><input type = "text" name = "User_fname" class = "btn" /></td>
					</tr>
					<tr>
						<td><span>Last Name:</span>&nbsp;</td>
						<td><input type = "text" name = "User_lname" class = "btn" /></td>
					</tr>
					<tr>
						<td><span>Email Address:</span>&nbsp;</td>
						<td><input type = "email" name = "User_email" class = "btn" /></td>
					</tr>
					<tr>
						<td><span>New Password:</span>&nbsp;</td>
						<td><input type = "password" name = "User_pass" class = "btn" /></td>
					</tr>
					<tr>
						<td><span>&nbsp;</span></td>
						<td>
							<div class = "pull-right" style = "margin-top:30px">
								<input type = "submit" class = "btn btn-success" value = "Add New User" />
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="pull-right">
			<button class = "btn btn-warning" id = "adminUserCancel">Cancel</button>
		</div>
	</div>
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
							<li><a href="../adminfrontPage/adminPanel.php" id = "adminChoices"><h3><span><?= $Admin_Fname ?>&nbsp;<?= $Admin_Lname ?></span></h3></a></li>
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
 					<h2 class = "font9">View User</h2>
 				</div>
 				<div class="span11">
 					<div class="pull-right">
 						<button class = "btn btn-primary" id = "adminaddUser">Add User</button>
 					</div>
 					<form method = "POST">
 						<table class = "table table-bordered" style = "float:center;position:inherit;background:url('../../assets/img/Beautiful_Background/yellow2.jpg');margin-top:45px">
 							<thead>
 								<tr>
 									<th align = "center">Id</th>
 									<th align = "center">First Name</th>
 									<th align = "center">Last Name</th>
 									<th style = "width:180px" align = "center">Action</th>
 								</tr>
 							</thead>
 						</table>
 						<div class = "scroll">
 							<table class = "table" style = "float:center;position:inherit">
 								<thead>
 									<tr>
 										<th align = "center"></th>
 										<th align = "center"></th>
 										<th align = "center"></th>
 										<th style = "width:180px" align = "center"></th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php foreach($result as $record):?>
 									<input type = "hidden" name = "editQuestId" value = "<?php echo $record['id']; ?>" />
 									<tr>
 										<td><?php echo $record['id']; ?></td>
 										<td><?php echo $record['first_name']; ?></td>
 										<td><?php echo $record['last_name']; ?></td>
 										<td>
 											<a class = "btn btn-primary" href = "viewUser.php?id=<?=$record['id'];?>">View</a>
 											<a class = "btn btn-info" href = "editUser.php?id=<?=$record['id'];?>">Edit</a>
 											<a class = "btn btn-danger" href = "deleteUser.php?id=<?=$record['id'];?>">Delete</a>
 										</td>
 									</tr>
 									<?php endforeach; ?>
 								</tbody>
 							</table>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
	</div>
	<script src = "../../assets/js/jquery.1.10.2.js"></script>	
	<script src = "../js/my_java.js"></script>
</body>
</html>