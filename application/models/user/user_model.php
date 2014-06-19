<?php
class User_model extends CI_Model {

	public function isLogin() {
		if ($this->input->cookie('user_id') != null)
			return true;
		else
			return false;
	}

	public function login($data) {
		$query = "SELECT 
						* 
					FROM 
						users 
					WHERE
						email = '".$data['email']."' AND `password`='".$data['password']."'
				";
		echo $query;
		$result = $this->db->query($query);
		//$result -- return array
		if ($result->num_rows() > 0) {
			$record = $result->row();
			print_r($record);
			$this->input->set_cookie("member_id", $record->user_id, time() + 3600);
			$this->input->set_cookie("email", $record->email, time() + 3600);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function logout() {
		delete_cookie("member_id");
		delete_cookie("email");
	}

}

?>