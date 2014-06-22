<?php
class User_model extends CI_Model {

	public function isLogin() {
		if($this->session->userdata('user_id')){
		  //user is logged in.
		  return true;
		}
		else{
		  //user is not logged in.
		  return false;
		}
	}		
	
	public function attempt_login($email, $password){
		// SELECT id, email FROM users WHERE email...
		$this->db->select('user_id, email');
		$query = $this->db->get_where('users',
					array(
						'email' => $email,
						'password' => do_hash($password) //SHA1
					)
				);
		if($query->num_rows() == 0){
			return false;
		} else {
			return $query->row();
		}	
	}
}

?>
