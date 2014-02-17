<?php 
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}
require_once('../adminOperator/dbconfig.php');

$res = new AdminHandler();
$result = $res->getExamineeRecord();
 ?>
<html>
<head>
	<title>Exam Result</title>
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global.css">
</head>
<body style = "background:url('../../assets/img/Beautiful_Background/6.jpg')">
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
 					<h2 class = "font9">View Exam Result</h2>
 				</div>
 				<div class="span11">
 					<form method = "POST">
 						<div class="scroll span11" style = "margin-top:50px">
 							<table style = "font-size:25px;color:white">
 								<?php foreach($result as $record): ?>
 								<tr>
 									<td>Name of Examinee:&nbsp;</td>
 									<td><span><?php echo $record['f_name']; ?>&nbsp;<?php echo $record['l_name']; ?></span></td>
 								</tr>
 								<tr>
 									<td>Date of Examination:&nbsp;</td>
 									<td><span><?php echo $record['date_of_exam']; ?></span></td>
 								</tr>
 								<tr>
 									<td>Score:&nbsp;</td>
 									<td><span><?php echo $record['score']; ?></span></td>
 								</tr>
 								<tr>
 									<td>Remark:&nbsp;</td>
 									<td><span><?php echo $record['remarks']; ?></span></td>
 								</tr>
 								<tr>
 									<td colspan = "2">
 										<div class="page-header span11">
 										</div>
 									</td>
 								</tr>
 								<?php endforeach; ?>
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