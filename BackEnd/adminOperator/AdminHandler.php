<?php
class AdminHandler {

	public function getAdmin($admin) {

		try {
			if (empty($admin)) {
				return false;
			}

			$getadmin = AdminDAO::getAdmin($admin);

			if (empty($getadmin)) {
				return false;
			} else {
				return $getadmin;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}	
	}

	public function adminLogIn($email,$pass) {

		try {
			if (empty($email)) {
				return false;
			} 

			if (empty($pass)) {
				return false;
			}

			$logAdmin = AdminDAO::adminLogIn($email,$pass);

			if (empty($logAdmin)) {
				return false;
			} else {
				return $logAdmin;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function createAdmin($firstname,$lastname,$Email,$Password) {

		try {
			if (empty($firstname)) {
				return false;
			} else {
				return $firstname;
			}

			if (empty($lastname)) {
				return false;
			} else {
				return $lastname;
			}

			if (empty($Email)) {
				return false;
			} else {
				return $Email;
			}

			if (empty($Password)) {
				return false;
			} else {
				return $Password;
			}

			$createAd = AdminDAO::createAdmin($firstname,$lastname,$Email,$Password);

			if (empty($createAd)) {
				return false;
			} else {
				return $createAd;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function viewQuestionnaire() {

		try {
			$viewQuest = AdminDAO::viewQuestionnaire();

			if (empty($viewQuest)) {
				return false;
			} else {
				return $viewQuest;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function viewQuestion($viewId) {

		try {
			if (empty($viewId)) {
				return false;
			}

			$view = AdminDAO::viewQuestion($viewId);

			if (empty($view)) {
				return false;
			} else {
				return $view;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function addQuestion($n_question,$n_choiceA,$n_choiceB,$n_choiceC,$n_choiceD,$n_answer) {

		try {
			if (empty($n_question)) {
				return false;
			}

			if (empty($n_choiceA)) {
				return false;
			}

			if (empty($n_choiceB)) {
				return false;
			}

			if (empty($n_choiceC)) {
				return false;
			}

			if (empty($n_choiceD)) {
				return false;
			}

			if (empty($n_answer)) {
				return false;
			}

			$addQuest = AdminDAO::addQuestion($n_question,$n_choiceA,$n_choiceB,$n_choiceC,$n_choiceD,$n_answer);

			if (empty($addQuest)) {
				return false;
			} else {
				return $addQuest;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An error Occur!');
			return false;
		}
	}

	public function getEditQuestion($id) {

		try {
			if (empty($id)) {
				return false;
			}

			$getEditQuest = AdminDAO::getEditQuestion($id);

			if (empty($getEditQuest)) {
				return false;
			} else {
				return $getEditQuest;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}	
	}

	public function editQuestion($id,$edit_question,$edit_choiceA,$edit_choiceB,$edit_choiceC,$edit_choiceD,$edit_answer) {

		try {
			if (empty($id)) {
				return false;
			} 

			if (empty($edit_question)) {
				return false;
			} 
			
			if (empty($edit_choiceA)) {
				return false;
			} 
			
			if (empty($edit_choiceB)) {
				return false;
			}
			
			if (empty($edit_choiceC)) {
				return false;
			} 
			
			if (empty($edit_choiceD)) {
				return false;
			}
			
			if (empty($edit_answer)) {
				return false;
			} 
			
			$editQuest = AdminDAO::editQuestion($id,$edit_question,$edit_choiceA,$edit_choiceB,$edit_choiceC,$edit_choiceD,$edit_answer);

			if (empty($editQuest)) {
				return false;
			} else {
				return $editQuest;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function deleteQuestion($delId) {

		try {
			if (empty($delId)) {
				return false;
			}

			$del = AdminDAO::deleteQuestion($delId);

			if (empty($del)) {
				return false;
			} else {
				return $del;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function getUpdateAdmin($adminId) {

		try {
			if (empty($adminId)) {
				return false;
			}

			$getUpAd = AdminDAO::getUpdateAdmin($adminId);

			if (empty($getUpAd)) {
				return false;
			} else {
				return $getUpAd;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function updateAdminProfile($adminId,$adminF,$adminL,$adminEmail,$adminPass,$adminProf) {

		try {
			if (empty($adminId)) {
				return false;
			}

			if (empty($adminF)) {
				return false;
			}

			if (empty($adminL)) {
				return false;
			}

			if (empty($adminEmail)) {
				return false;
			}

			if (empty($adminPass)) {
				return false;
			}

			if (empty($adminProf)) {
				return false;
			}

			$update = AdminDAO::updateAdminProfile($adminId,$adminF,$adminL,$adminEmail,$adminPass,$adminProf);

			if (empty($update)) {
				return false;
			} else {
				return $update;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function getExamineeRecord() {

		try {
			$getER = AdminDAO::getExamineeRecord();

			if (empty($getER)) {
				return false;
			} else {
				return $getER;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function getadminUser() {

		try {
			$getIt = AdminDAO::getadminUser();

			if (empty($getIt)) {
				return false;
			} else {
				return $getIt;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function addAdminUser($fname,$lname,$email,$password) {

		try {
			if (empty($fname)) {
				return false;
			} else {
				return $fname;
			}

			if (strlen($fname < 2)) {
				return array(
					'status' => 'Failed!',
					'message' => 'Invalid First Name!'
					); 
			} else {
				return $fname;
			}

			if (empty($lname)) {
				return false;
			} else {
				return $lname;
			}

			if (strlen($lname < 2)) {
				return array(
					'status' => 'Failed!',
					'message' => 'Invalid Last Name!'
					);
			} else {
				return $lname;
			}

			if (empty($email)) {
				return false;
			} else {
				return $email;
			}

			if (empty($password)) {
				return false;
			} else {
				return $password;
			}

			$addUser = AdminDAO::addAdminUser($fname,$lname,$email,$password);

			if (empty($addUser)) {
				return false;
			} else {
				return $addUser;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function adminviewUser($UserId) {

		try {
			if (empty($UserId)) {
				return false;
			}

			$adminUser = AdminDAO::adminviewUser($UserId);

			if (empty($adminUser)) {
				return false;
			} else {
				return $adminUser;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function getEditUser($editUser) {

		try {
			if (empty($editUser)) {
				return false;
			}

			$getEdit = AdminDAO::getEditUser($editUser);

			if (empty($getEdit)) {
				return false;
			} else {
				return $getEdit;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function adminEditUser($editId,$editfname,$editlname,$editEmail,$editPass) {

		try {
			if (empty($editId)) {
				return false;
			}

			if (empty($editfname)) {
				return false;
			}

			if (empty($editlname)) {
				return false;
			}

			if (empty($editEmail)) {
				return false;
			}

			if (empty($editPass)) {
				return false;
			}

			$Useredit = AdminDAO::adminEditUser($editId,$editfname,$editlname,$editEmail,$editPass);

			if (empty($Useredit)) {
				return false;
			} else {
				return $Useredit;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public function admindeleteUser($delId) {

		try {
			if (empty($delId)) {
				return false;
			}

			$deleteUser = AdminDAO::admindeleteUser($delId);

			if (empty($deleteUser)) {
				return false;
			} else {
				return $deleteUser;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}
} 
 ?>