<?php 
	//--start of session--//
	ob_start();
	session_start();
	require_once('dbconfig.php');
	$answers = $_SESSION['answers'];
	$F_name = $_SESSION['F_name'];
	$L_name = $_SESSION['L_name'];
	$Email = $_SESSION['email'];
	if (isset($_SESSION['answers']) < 10) {
		header('Location: Online_test.php');
	}
	if (isset($_SESSION['Email'])){
		header('Location: result.php');
	}
	//--use to view correct answer you got ...
	$result = ExamDAO::checkAnswer($answers);

	//--use to view correct answer for each question ...
	$res = ExamDAO::getCorrectAnswers();

	//--use to get the question number ...
	$getChe = new ExamHandler();
	$getId = $getChe->getAll();

	if ($result >= 7){
		echo "<script>alert('Congratulation! You got ".$result." correct Answers!');</script>";

	} else {
		echo "<script>alert('Sorry! You Fail!');</script>";
		echo "<script>alert('You only got ".$result." correct answer!');</script>";
		echo "<script>alert('Better Luck next time!');</script>";
	}
	
	include('database/testResult.php');

	//--use to save the score you got, the remark, and the date to take the exam ...
	$getRec = new ExamHandler();
	$record = $getRec->getExamRecord($F_name,$L_name,$Email,$result,$rate);

	//-- end of session --//
	session_write_close();
 ?>
 <html>
 <head>
 	<title>Result</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
 </head>
 <body style = "background:url('assets/img/Beautiful_Background/29.jpg');background-attachment:fixed">
 <div class = "container">
 	<div class = "row">
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
		<div class = "container span12 thumbnail" style = "margin-top:100px;margin-bottom:30px">
			<div class = "span12" style = "margin-top:10px;background:url('assets/img/yellow2.jpg')">
				<h2 align = "center">Examination Result:</h2>
			</div>
			<div class = "pull-left">
				<hr/>
			</div>
			<div>
				<span class = "font9"><?= $F_name ?>&nbsp;<?= $L_name ?></span>
			</div>
			<div style = "margin-top:20px">
				<span class = "font8">Score: </span>
				<span class = "font8"><?= $result ?></span>
			</div>
			<div style = "font-color:red;margin-top:10px">
				<span style = "color:red"><?= $rate ?></span>
			</div>
			<div class = "span11" style = "margin-top:30px">
				<table class = "table table-bordered span10">
					<thead>
						<tr align = "center">
							<th>Question Number</th>
							<th>Correct Answers</th>
							<th>Your Answers</th>
							<th>Remarks</th>
						</tr>
					</thead>
					<tbody>
						<tr align = "center">
							<td><span id = "getQuestion"><?= $getId[0] ?></span></td>
							<td><span id = "getCorrect"><?= $res[0] ?></span></td>
							<td><span id = "getYour"><?= $answers[0] ?></span></td>
							<td><span id = "remarks"><?= $remarks ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion1"><?= $getId[1] ?></span></td>
							<td><span id = "getCorrect1"><?= $res[1] ?></span></td>
							<td><span id = "getYour1"><?= $answers[1] ?></span></td>
							<td><span id = "remarks1"><?= $remarks1 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion2"><?= $getId[2] ?></span></td>
							<td><span id = "getCorrect2"><?= $res[2] ?></span></td>
							<td><span id = "getYour2"><?= $answers[2] ?></span></td>
							<td><span id = "remarks2"><?= $remarks2 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion3"><?= $getId[3] ?></span></td>
							<td><span id = "getCorrect3"><?= $res[3] ?></span></td>
							<td><span id = "getYour3"><?= $answers[3] ?></span></td>
							<td><span id = "remarks3"><?= $remarks3 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion4"><?= $getId[4] ?></span></td>
							<td><span id = "getCorrect4"><?= $res[4] ?></span></td>
							<td><span id = "getYour4"><?= $answers[4] ?></span></td>
							<td><span id = "remarks4"><?= $remarks4 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion5"><?= $getId[5] ?></span></td>
							<td><span id = "getCorrect5"><?= $res[5] ?></span></td>
							<td><span id = "getYour5"><?= $answers[5] ?></span></td>
							<td><span id = "remarks5"><?= $remarks5 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion6"><?= $getId[6] ?></span></td>
							<td><span id = "getCorrect6"><?= $res[6] ?></span></td>
							<td><span id = "getYour6"><?= $answers[6] ?></span></td>
							<td><span id = "remarks6"><?= $remarks6 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion7"><?= $getId[7] ?></span></td>
							<td><span id = "getCorrect7"><?= $res[7] ?></span></td>
							<td><span id = "getYour7"><?= $answers[7] ?></span></td>
							<td><span id = "remarks7"><?= $remarks7 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion8"><?= $getId[8] ?></span></td>
							<td><span id = "getCorrect8"><?= $res[8] ?></span></td>
							<td><span id = "getYour8"><?= $answers[8] ?></span></td>
							<td><span id = "remarks8"><?= $remarks8 ?></span></td>
						</tr>
						<tr align = "center">
							<td><span id = "getQuestion9"><?= $getId[9] ?></span></td>
							<td><span id = "getCorrect9"><?= $res[9] ?></span></td>
							<td><span id = "getYour9"><?= $answers[9] ?></span></td>
							<td><span id = "remarks9"><?= $remarks9 ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
 	</div>
 </div>
 <script src = "assets/js/my_js.js"></script>
 </body>
 </html>
