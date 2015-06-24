<?php
class main extends CI_Controller {
	function index() {
		//$this->session->unset_userdata('logged_in');
   		//$this->session->sess_destroy();
   		$sees_array = $this->session->userdata('loggin_success');
		if($sees_array["user_EMAIL"]==""){
			$this->load->view("main/header");
			$this->load->view("main/login");
			$this->load->view("main/footer");
		} else {
			$this->load->view("main/header");
			$this->load->view("main/userprofile");
			$this->load->view("main/footer");	
		}
		
	}

	
}