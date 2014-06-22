<?php

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url'); //for base_url using
		$this->load->library('session');
		//load model
		$this->load->model("user/user_model", "user_model");
	}

	public function index() {
		if ($this->user_model->isLogin()) {
			$this->load->view('header');
			//will change this view to something else later.
			$this->load->view('home_view');
			$this->load->view('footer');
		} else {
			//something.
		}
	}
	
	public function logout(){
		$this->session->unset_userdata($user_id);
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'), 'refresh');
	}
}
?>