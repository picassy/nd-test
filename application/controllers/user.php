<?php
	class User extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('cookie');
			$this->load->helper('url');
			$this->load->database();
			$this->load->helper('form');
			$this->load->model('user/user_model','user_model');
		}

		public function register(){
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			if($data['email']!="0"||$data['password']!="0"){
				$data['password'] = md5('\''.$data['password'].'\'');
				$data = $this->db->insert('users', $data); 
				$this->registration_success();
			} else {
				$this->back_to_register();
			}
		}

		public function registration_success(){
			$this->load->view('header');
			$this->load->view('user/registration_success_view');
			$this->login();
			$this->load->view('footer');
		}

		public function back_to_register(){
			$this->load->view('header');
			$this->load->view('user/registration_view');
			$this->load->view('footer');
		}


		public function login(){
			$data['email'] = $this->input->post('email');
			$data['password'] = md5('\''.$this->input->post('password').'\'');
			if ($this->user_model->login($data)) {
				header('Location: ' . site_url('home/'));
			} else {
				echo "login failed";
				$this->load->view('user/login_form_view');
				//echo '<p><a href="login">กลับหน้าแรก</a></p>';
				//echo '<p><a href="register">หรือ สมัครสมาชิก</a></p>';
			}
		}

	}
?>