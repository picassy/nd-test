<?php
	class Register extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('security');
			$this->load->model('user/user_model','user_model');
		}

		public function index(){
			$data['title'] = "Register";
			$this->load->view('header', $data);
			$this->load->view('user/registration_view', $data);
			$this->load->view('footer');
		}

		public function add(){
			$data['email'] = $this->input->post('email');
			$data['password'] = do_hash($this->input->post('password')); //SHA1
			if (count($data) != count(array_filter($data))) {
				//failed to register.
				$this->index();
			}else {
				$this->db->insert('users', $data);
				$this->registered();
			}
		}

		public function registered(){
			$data['title'] = "";
			$this->load->view('header');
			$this->load->view('user/registration_complete_view');
			$this->load->view('footer');
		}
	}
?>
