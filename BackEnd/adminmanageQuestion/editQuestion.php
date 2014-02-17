<?php 
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
$Email = $_SESSION['Email'];

if (isset($_SESSION['Email']) == ""){
	header('Location: ../index.php');
}
require_once('../adminOperator/dbconfig.php');

$editId = (isset($_GET['id']) ? $_GET['id']:false);

//--use to get the data of the question you want to Edit--//
$results = new AdminHandler();
$result = $results->getEditQuestion($editId);

if ($result === false) {
	echo "<script>alert('Can't Access Question right now!');window.location.href='manageAdmin.php';</script>";
} else {
?>
 <html>
 <head>
 	<title>Edit Question</title>
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
 			<div class = "span6 offset3" style = "margin-top:80px">
 				<div class = "page-header">
 					<h2 class = "font9">Edit Questionnaire</h2>
 				</div>
 				<div class = "thumbnail span5">
 					<form method = "POST" action = "editSuccess.php">
 						<table align = "center" class = "margTable">
 							<tr>
 								<td><input type = "hidden" class = "btn" name = "edit_id" value = "<?php echo $result['id'] ?>" /></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Question:</font></label></td>
 								<td><font class = "viewfontAdmin"><textarea class = "btn" name = "edit_question"><?php echo $result['test_question'] ?></textarea></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice A:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceA" value = "<?php echo $result['choice_A'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice B:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceB" value = "<?php echo $result['choice_B'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice C:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceC" value = "<?php echo $result['choice_C'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice D:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceD" value = "<?php echo $result['choice_D'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Answer:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_answer" value = "<?php echo $result['answer'] ?>"></font></td>
 							</tr>
 						</table>
 						<hr>
 						<div class="pull-right">
 							<input type = "submit" class = "btn btn-success" value ="Update Question" />
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
 <?php } ?>