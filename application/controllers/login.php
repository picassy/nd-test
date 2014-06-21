<?php
	class Login extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
		}

		public function index(){
			$data['title'] = "Login";
			$this->load->view('header', $data);
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$this->session->set_userdata($data);
			$this->load->view('user/login_form_view', $data);
			$this->load->view('footer');
		}

	}
?>