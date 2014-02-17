<?php 
//--start of session--//
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}
require_once('../adminOperator/dbconfig.php');

//--use to get all database records and view ...
$result = new AdminHandler();
$results = $result->viewQuestionnaire();

//--use to view all Examinee Record--//
$resres = new AdminHandler();
$res = $resres->getExamineeRecord();

//--end of session--//
 ?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/my_style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global.css">
</head>
<body style = "background:url('../../assets/img/Beautiful_Background/29.jpg');background-attachment:fixed">
<div id = "overlay1"></div>
<div id = "addQuestion">
	<h2 align = "center" class = "font9">Add Question</h2>
	<div id = "addQuest">
		<table align = "center">
			<form action = "addNewQuestion.php" method = "POST">
				<tr>
					<td><label>Question:&nbsp;</label></td>
					<td><textarea name = "new_question"></textarea></td>
				</tr>
				<tr>
					<td><label>Choice A:&nbsp;</label></td>
					<td><input type = "text" class = "btn" name = "new_choiceA" /></td>
				</tr>
				<tr>
					<td><label>Choice B:&nbsp;</label></td>
					<td><input type = "text" class = "btn" name = "new_choiceB" /></td>
				</tr>
				<tr>
					<td><label>Choice C:&nbsp;</label></td>
					<td><input type = "text" class = "btn" name = "new_choiceC" /></td>
				</tr>
				<tr>
					<td><label>Choice D:&nbsp;</label></td>
					<td><input type = "text" class = "btn" name = "new_choiceD" /></td>
				</tr>
				<tr>
					<td><label>Correct Answer:&nbsp;</label></td>
					<td><input type = "text" class = "btn" name = "new_answer" /></td>
				</tr>
				<tr>
					<div class="pull-right" style = "margin-top:260px;margin-right:10px">
						<input type = "submit" class = "btn btn-success addbutton" value = "Add" />
					</div>
				</tr>
			</form>
		</table>
	</div>
	<div class="pull-right">
		<a href = "#" class = "btn btn-warning" style = "margin-top:350px;margin-right:10px" id = "closeAdd">Cancel</a>
	</div>
</div>
<div id = "viewExaminee">
	<div class="page-header">
		<h2 align = "center">View Examinee</h2>
	</div>
	<div id = "viewExaminees">
		<div class="span4">
			<form>
				<table>
					<tbody>
						<?php foreach($res as $records): ?>
						<tr>
							<td class = "AdminviewExam"><b>Date of Examination:&nbsp;</b></td>
							<td><b><span><?php echo $records['date_of_exam']; ?></span></b></td>
						</tr>
						<tr>
							<td><b>First Name:&nbsp;</b></td>
							<td><b><span><?php echo $records['f_name']; ?></span></b></td>
						</tr>
						<tr>
							<td><b>Last Name:&nbsp;</b></td>
							<td><b><span><?php echo $records['l_name']; ?></span></b></td>
						</tr>
						<tr>
							<td><b>Email Address:&nbsp;</b></td>
							<td><b><span><?php echo $records['email_add']; ?></span></b></td>
						</tr>
						<tr>
							<td><b>Score:&nbsp;</b></td>
							<td><b><span><?php echo $records['score']; ?></span></b></td>
						</tr>
						<tr>
							<td><b>Admin Remark:&nbsp;</b></td>
							<td><b><span><?php echo $records['remarks']; ?></span></b></td>
						</tr>
						<tr>
							<td colspan = "2"><div class="page-header"></div></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
	<div class="pull-right cancelviewAd">
		<input type = "submit" class = "btn btn-warning" value = "Close" id = "closeViewExaminee" />
	</div>
</div>
<div class="container">
	<div class="navbar navbar-fixed-top">
		<div style = "background:url('../../assets/img/Beautiful_Background/40.jpg')" class = "background">
			<div class = "span4 pull-left">
				<h1 class = "font"><img src="../../assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
			</div>
			<div class="span4 pull-right">
				<nav class = "nav pull-right" style = "margin-top:10px">
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
	<div class="container" style = "float:center;position:absolute">
		<div class = "span12" style = "margin-top:60px">
			<div class = "page-header">
				<h2 class = "font9">View Questionnaire</h2>
			</div>
			<div class="pull-right">
				<a class = "btn btn-default" id = "viewExam">View Examinee</a>
				<a class = "btn btn-primary" id = "add">Add Question</a>
			</div>
			<form method = "POST">
				<table class = "table table-bordered" style = "float:center;background:url('../../assets/img/Beautiful_Background/yellow2.jpg');margin-top:62px">
					<thead>
						<tr>
							<th align = "center">Id</th>
							<th align = "center">Question</th>
							<th style = "width:180px" align = "center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($results as $record):?>
						<input type = "hidden" name = "editQuestId" value = "<?php echo $record['id']; ?>" />
						<tr>
							<td><?php echo $record['id']; ?></td>
							<td><?php echo $record['test_question']; ?></td>
							<td colspan = "3">
								<a class = "btn btn-primary" href = "viewQuestion.php?id=<?=$record['id'];?>">View</a>
								<a class = "btn btn-info" href = "editQuestion.php?id=<?=$record['id'];?>">Edit</a>
								<a class = "btn btn-danger" href = "deleteQuestion.php?id=<?=$record['id'];?>">Delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
<script src = "../../assets/js/jquery.1.10.2.js"></script>	
<script src = "../js/my_java.js"></script>
</body>
</html>