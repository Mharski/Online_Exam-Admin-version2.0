<?php

class ExamHandler {

	public function __construct() {

	}

	public function getQuestion($q_number) {

		if (empty($q_number)) {
			return false;
		}

		$getQ = ExamDAO::getQuestion($q_number);

		if (empty($getQ)) {
			return false;
		} else {
			return $getQ;
		}
	}

	public function getUser($email,$pass) {

		try {
			if (empty($email)) {
				return false;
			} 

			if (empty($pass)) {
				return false;
			}
			
			$getU = ExamDAO::getUser($email,$pass);

			if (empty($getU)) {
				return false;
			} else {
				return $getU;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function createUser($first_name, $last_name, $email, $password) {

		if (empty($first_name)) {
			return false;
		}
		if (strlen($first_name < 2)) {
			return array(
				'status' => 'Failed!',
				'message' => 'Invalid First Name!'
				);
		}
		if (empty($last_name)) {
			return false;
		}
		if (strlen($last_name < 2)) {
			return array(
				'status' => 'Failed!',
				'message' => 'Invalid Last Name!'
				);
		}
		if (empty($email)) {
			return false;
		}
		if (ExamDAO::isEmailExist($email)) {
			return array(
				'status' => 'Failed!',
				'message' => 'Email is already Existing!'
				);
		}
		if (empty($password)) {
			return false;
		}

		$create = ExamDAO::createUser($first_name, $last_name, $email, $password);

		if (empty($create)) {
			return false;
		} else {
			return $create;
		}
	}

	public function getAll() {

		$getall = ExamDAO::getAll();

		if(empty($getall)) {
			return false;
		} else {
			return $getall;
		}
	}

	public function getId() {

		$getid = ExamDAO::getId();

		if (empty($getid)) {
			return false;
		} else {
			return $getid;
		}
	}

	public function getExamRecord($f_name,$l_name,$email,$score,$remarks) {

		if (empty($f_name)) {
			return false;
		}
		if (empty($l_name)) {
			return false;
		}
		if (empty($email)) {
			return false;
		}
		if (empty($score)) {
			return false;
		}
		if (empty($remarks)) {
			return false;
		}

		$getExamR = ExamDAO::getExamRecord($f_name,$l_name,$email,$score,$remarks);

		if (empty($getExamR)) {
			return false;
		} else {
			return $getExamR;
		}
	}
} 
 ?>