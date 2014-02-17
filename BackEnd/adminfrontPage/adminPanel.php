<?php 
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}
 ?>
 <html>
 <head>
 	<title>Admin Panel</title>
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
 					<nav style = "margin-top:10px">
 						<ul class = "nav nav-tabs">
 							<li><a href="adminPanel.php" id = "adminChoices"><h3><span><?= $Admin_Fname ?>&nbsp;<?= $Admin_Lname ?></span></h3></a></li>
 							<li class = "pull-right"><a href="../adminOperator/logOut.php">Log Out</a></li>
 						</ul>
 					</nav>
 				</div>
 			</div>
 		 </div>
 		<div id = "PanelAdmin">
 			<a href="../adminmanageUser/adminviewUser.php">
 				<div id="panelUser">User</div>
 			</a>
 			<a href="../adminmanageQuestion/manageAdmin.php">
 				<div id="panelQuestion">Question</div>
 			</a>
 			<a href="../adminExamResult/adminexamResult.php">
 				<div id="panelExam">Exam Results</div>
 			</a>
 		</div>
 	</div>
<script src = "../../assets/js/jquery.1.10.2.js"></script>	
<script src = "../js/my_java.js"></script>
 </body>
 </html>