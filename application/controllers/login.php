<?php
class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('security'); //using do_hash.
		$this->load->model('user/user_model','user_model');
	}

	public function index($msg = ''){
		//passed string from function log as $msg.
		$data['title'] = "Login";
		$data['msg'] = $msg; //failed to login..
		$this->load->view('header', $data);
		$this->load->view('user/login_form_view', $data);
		$this->load->view('footer');
	}
	
	public function log(){
		//get email and password from login form.
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//check if the current user exists.
		$user_data = $this->user_model->attempt_login($email, $password);
		if(!$user_data){
			$this->index('Failed to login, please try again.');
		}else{
			//set userdata.
			$this->session->set_userdata('id', $user_data->id);
			$this->session->set_userdata('email', $user_data->email);
			redirect(base_url());
		}
	}

	public function logout(){
		//unset userdata.
		$this->session->unset_userdata($user_data);
		//destroy session.
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'), 'refresh');
	}
}
?>