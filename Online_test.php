<html>
<head>
	<title>Online Examination</title>
	<link rel="stylesheet" type="text/css" href="assets/css/my_style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
</head>
<?php 
ob_start();
session_start();
if (isset($_SESSION['email']) == "") {
	header('Location: index.php');
} else {
	echo "Welcome ". $_SESSION['email'];
}
require_once('dbconfig.php');
$F_name = $_SESSION['F_name'];
$L_name = $_SESSION['L_name'];

//--use to count the number of Item of Exam from the Database--//
$counId = new ExamHandler();
$countId = $counId->getId();

define('QUESTION_NUMBER',count($countId));
$q_number = (isset($_POST['q_number'])) ? $_POST['q_number']+1 : 1;
$answers = (isset($_POST['answers'])) ? $_POST['answers'] : '';
$answer = (isset($_POST['answer'])) ? $_POST['answer'] : '';
$answers .= $answer; //append $answer to $answers

if ($q_number > QUESTION_NUMBER) {
	$_SESSION['answers'] = $answers;
	header('Location: result.php');
}

//--use to get the default question number one--//
$default = new ExamHandler();
$defaultTest = $default->getQuestion($q_number);
?>
<body style = "background:url('assets/img/Beautiful_Background/26.jpg')">
	<div class = "container" style = "margin-top:50px">
		<div class="navbar navbar-fixed-top">
			<div style = "background:url('assets/img/Beautiful_Background/40.jpg')" class = "background">
				<div class = "span4 pull-left">
					<h1 class = "font"><img src="assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
				</div>
				<div class="span2 pull-right">
					<nav class = "nav" style = "margin-top:10px">
						<ul class = "nav nav-tabs">
							<li class = "pull-right"><a href="logOut.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div id = "overlay1"></div>
		<div>
			<div class="row">
				<div class="span12" style = "margin-top:50px">
					<div>
						<center><p class = "font4"><b>Online Examination</b></p></center>
						<center><h2><font class = "font3" color = "black" style = "font-family:'Tempus Sans ITC'">Science Literature</font><h2></center>
						<hr><br>
					</div>
					<div class="span6 pull-left">
						<label class = "font6">Welcome:</label><span class = "font7"><?= $F_name ?>&nbsp;<?= $L_name ?></span>
					</div>
					<br>
					<!-- <form name="cd" class = "pull-right">
						<span class="labe">Remaining Time</span>:
					  		<span><input name="disp" type="text" class="clock Oras" id="txt" value="10:00" readonly="true" size="10" align="right" border="1"></span>
					  	<span class="labe">Minutes</span>
					 </form> -->
					 <div class = "span12" style = "margin-top:50px" id = "Test_Question">
					 	<div id = "Online_test">
					 		<form action = "<?= $_SERVER['PHP_SELF'] ?>" method = "POST">
					 			<table class = "table1">
					 				<tr><td><input type = "hidden" name = "q_number" value = "<?= $q_number ?>"/></td></tr>
					 				<tr><td><input type = "hidden" name = "answers" value = "<?= $answers ?>" /></td></tr>
					 				<tr><td class = "font5"><?= $q_number ?>.)&nbsp;&nbsp;&nbsp;<?= $defaultTest['test_question'] ?></td></tr>
					 				<tr><td><br/></td></tr>
					 				<tr><td class = "font5">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "answer" value = "a" id = "choice_a"/>&nbsp;&nbsp;<?= $defaultTest['choice_A'] ?></td></tr>
					 				<tr><td class = "font5">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "answer" value = "b" id = "choice_b"/>&nbsp;&nbsp;<?= $defaultTest['choice_B'] ?></td></tr>
					 				<tr><td class = "font5">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "answer" value = "c" id = "choice_c"/>&nbsp;&nbsp;<?= $defaultTest['choice_C'] ?></td></tr>
					 				<tr><td class = "font5">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "answer" value = "d" id = "choice_d"/>&nbsp;&nbsp;<?= $defaultTest['choice_D'] ?></td></tr>
					 			</table>
					 			<center><input type = "submit" class = "btn btn-success" value = "Submit" id = "testSubmit"></center>
					 		</form>
					 	</div>
					 </div>
				</div>
			</div>
		</div>
	</div>
	<script src = "assets/js/jquery.1.10.2.js"></script>
	<script src = "assets/js/ajax.js"></script>
</body>
</html>