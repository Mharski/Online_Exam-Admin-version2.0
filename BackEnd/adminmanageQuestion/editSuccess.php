<?php 
require_once('../adminOperator/dbconfig.php');

$edit_id = (isset($_POST['edit_id']) ? $_POST['edit_id']:false);
$edit_question = (isset($_POST['edit_question']) ? $_POST['edit_question']:false);
$edit_choiceA = (isset($_POST['edit_choiceA']) ? $_POST['edit_choiceA']:false);
$edit_choiceB = (isset($_POST['edit_choiceB']) ? $_POST['edit_choiceB']:false);
$edit_choiceC = (isset($_POST['edit_choiceC']) ? $_POST['edit_choiceC']:false);
$edit_choiceD = (isset($_POST['edit_choiceD']) ? $_POST['edit_choiceD']:false);
$edit_answer = (isset($_POST['edit_answer']) ? $_POST['edit_answer']:false);

$arr = array(
	'e_id' => $edit_id,
	'e_question' => $edit_question,
	'e_choiceA' => $edit_choiceA,
	'e_choiceB' => $edit_choiceB,
	'e_choiceC' => $edit_choiceC,
	'e_choiceD' => $edit_choiceD,
	'e_answer' => $edit_answer
	);
//--use to update data from questions--//
$result = new AdminHandler();
$res = $result->editQuestion($arr['e_id'],$arr['e_question'],$arr['e_choiceA'],$arr['e_choiceB'],$arr['e_choiceC'],$arr['e_choiceD'],$arr['e_answer']);

if ($res === false) {
	echo "<script>alert('Failed to Update Question!');window.location.href='manageAdmin.php';</script>";
} else {
	echo "<script>alert('Successfully Update Question!');window.location.href='manageAdmin.php';</script>";
}
 ?>