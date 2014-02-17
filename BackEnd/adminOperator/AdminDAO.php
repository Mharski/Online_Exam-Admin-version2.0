<?php 
class AdminDAO{
	public static function getAdmin($admin) {
		global $db;

		$sql = "SELECT * FROM admin WHERE Email = '{$admin}'";
		$result = $db->query($sql);
		if (!empty($result)) {
			$getAdmin = $result->fetch_assoc();
			$result->free();
			return $getAdmin;
		} else {
			return false;
		}
	}

	public static function adminLogIn($email,$pass) {
		global $db;

		$sql = "SELECT * FROM admin WHERE Email = '{$email}' AND Password = '{$pass}'";
		$result = $db->query($sql);
		if(!empty($result)){
			$admin = $result->fetch_assoc();
			$result->free();
			return $admin;
		} else {
			return false;
		}
	}

	public static function createAdmin($firstname, $lastname, $Email, $Password){
		global $db;
		if (!$email) return false;
		if (!$password) return false;
		$sql = "INSERT INTO admin (First_name, Last_name, Email, Password) VALUES('$firstname','$lastname','$Email','$Password')";
		$result = $db->query($sql);
		return $result;
	}

	public static function viewQuestionnaire(){
		global $db;

		$sql = "SELECT * FROM test_question";
		$result = $db->query($sql);
		$row = array();
		if ($result->num_rows > 0){
			while ($view = $result->fetch_assoc()){
				$row[] = $view;
			}
			return $row;
		} else {
			return false;
		}
	}

	public static function viewQuestion($viewId) {
		global $db;

		$sql = "SELECT * FROM test_question WHERE id = '{$viewId}'";
		$result = $db->query($sql);
		if (!empty($result)) {
			$view = $result->fetch_assoc();
			$result->free();
			return $view;
		} else {
			return false;
		}
	}

	public static function addQuestion($n_question,$n_choiceA,$n_choiceB,$n_choiceC,$n_choiceD,$n_answer) {
		global $db;

		if (!$n_question) return false;
		if (!$n_choiceA) return false;
		if (!$n_choiceB) return false;
		if (!$n_choiceC) return false;
		if (!$n_choiceD) return false;

		$sql = "INSERT INTO test_question (test_question, choice_A, choice_B, choice_C,choice_D, answer) VALUES('$n_question','$n_choiceA','$n_choiceB','$n_choiceC','$n_choiceD','$n_answer')";
		$result = $db->query($sql);
		if (!empty($result)){
			return $result;
		} else {
			return false;
		}
	}

	public static function getEditQuestion($id) {
		global $db;

		$sql = "SELECT * FROM test_question WHERE id = '{$id}'";
		$result = $db->query($sql);
		if(!empty($result)){
			$getEdit = $result->fetch_assoc();
			$result->free();
			return $getEdit;
		} else {
			return false;
		}
	}

	public static function editQuestion($id,$edit_question,$edit_choiceA,$edit_choiceB,$edit_choiceC,$edit_choiceD,$edit_answer) {
		global $db;

		$sql = "UPDATE test_question SET test_question ='$edit_question', choice_A = '$edit_choiceA', choice_B = '$edit_choiceB', choice_C = '$edit_choiceC', choice_D = '$edit_choiceD', answer = '$edit_answer' WHERE id = '{$id}'";
		$result = $db->query($sql);
		if(isset($result) && !empty($result)){
			return $result;
		} else {
			return false;
		}
	}

	public static function deleteQuestion($delId) {
		global $db;

		$sql = "DELETE FROM test_question WHERE id = '{$delId}'";
		$result = $db->query($sql);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}

	public static function getUpdateAdmin($adminId) {
		global $db;

		$sql = "SELECT * FROM admin WHERE admin_id = '$adminId'";
		$result = $db->query($sql);
		if (!empty($result) && isset($result)){
			$record = $result->fetch_assoc();
			$result->free();
			return $record;
		} else {
			return false;
		}
	}

	public static function updateAdminProfile($adminId,$adminF,$adminL,$adminEmail,$adminPass,$adminProf) {
		global $db;

		$sql = "UPDATE admin SET First_name = '$adminF', Last_name = '$adminL', Email = '$adminEmail', Password = '$adminPass', profile_pict = '$adminProf' WHERE admin_id = '$adminId'";
		$result = $db->query($sql);
		if (!empty($result) && isset($result)) {
			return $result;
		} else {
			return false;
		}
	}

	public static function getExamineeRecord() {
		global $db;

		$sql = "SELECT * FROM exam_record ORDER BY exam_id";
		$result = $db->query($sql);
		$row = array();
		if ($result->num_rows > 0) {
			while ($record = $result->fetch_assoc()) {
				$row[] = $record;
			}
			return $row;
		} else {
			return false;
		}
	}

	public static function getadminUser() {
		global $db;

		$sql = "SELECT * FROM registration";
		$result = $db->query($sql);
		$row = array();
		if ($result->num_rows > 0) {
			while ($record = $result->fetch_assoc()) {
				$row[] = $record;
			}
			return $row;
		} else {
			return false;
		}
	}

	public static function addAdminUser($fname,$lname,$email,$password) {
		global $db;
		if (!$email) return false;
		if (!$password) return false;

		$sql = "INSERT INTO registration (first_name,last_name,email,password) VALUES('$fname','$lname','$email','$password')";
		$result = $db->query($sql);
		return $result;
	}

	public static function adminviewUser($UserId) {
		global $db;

		$sql = "SELECT * FROM registration WHERE id = '$UserId'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			$record = $result->fetch_assoc();
			$result->free();
			return $record;
		} else {
			return false;
		}
	}

	public static function getEditUser($editUser) {
		global $db;

		$sql = "SELECT * FROM registration WHERE id = '$editUser'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			$edit = $result->fetch_assoc();
			$result->free();
			return $edit;
		} else {
			return false;
		}
	}

	public static function adminEditUser($editId,$editfname,$editlname,$editEmail,$editPass) {
		global $db;

		$sql = "UPDATE registration SET first_name = '$editfname', last_name = '$editlname', email = '$editEmail', password = '$editPass' WHERE id = '{$editId}'";
		$result = $db->query($sql);
		if (isset($result) && !empty($result)) {
			return $result;
		} else {
			return false;
		}
	}

	public static function admindeleteUser($delId) {
		global $db;

		$sql = "DELETE FROM registration WHERE id = '{$delId}'";
		$result = $db->query($sql);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
}
 ?>