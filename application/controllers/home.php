<?php

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url'); //for base_url using
		//load model
		$this->load->model("user/user_model", "user_model");
	}

	public function index() {

		$this->load->view('header');
		//if haven't logged yet, show login_form_view
		$this->load->view('home_view');
		$this->load->view('footer');
		if ($this->user_model->isLogin()) {
			$this->load->view('header');
			$this->load->view('footer');
		} else {
			header('Location: '.site_url(''));
			echo "dddd";
		}
	}
}
?>