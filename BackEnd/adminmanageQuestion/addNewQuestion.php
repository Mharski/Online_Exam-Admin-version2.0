<?php 
require_once('../adminOperator/dbconfig.php');

$n_question = (isset($_POST['new_question']) && !empty($_POST['new_question']) ? $_POST['new_question']:false);
$n_choiceA = (isset($_POST['new_choiceA']) && !empty($_POST['new_choiceA']) ? $_POST['new_choiceA']:false);
$n_choiceB = (isset($_POST['new_choiceB']) && !empty($_POST['new_choiceB']) ? $_POST['new_choiceB']:false);
$n_choiceC = (isset($_POST['new_choiceC']) && !empty($_POST['new_choiceC']) ? $_POST['new_choiceC']:false);
$n_choiceD = (isset($_POST['new_choiceD']) && !empty($_POST['new_choiceD']) ? $_POST['new_choiceD']:false);
$n_answer = (isset($_POST['new_answer']) && !empty($_POST['new_answer']) ? $_POST['new_answer']:false);

$arr = array(
	'new_q' => $n_question,
	'new_cA' => $n_choiceA,
	'new_cB' => $n_choiceB,
	'new_cC' => $n_choiceC,
	'new_cD' => $n_choiceD,
	'new_ans' => $n_answer
	);

//--use to add new question from the Online Exam--//
$res = new AdminHandler();
$result = $res->addQuestion($arr['new_q'],$arr['new_cA'],$arr['new_cB'],$arr['new_cC'],$arr['new_cD'],$arr['new_ans']);

if($result === false){
	echo "<script>alert('Oopss! There were an Error Occur!');window.location.href='manageAdmin.php';</script>";
} else {
	echo "<script>alert('Successfully Add Question!');window.location.href='manageAdmin.php';</script>";
}
 ?>