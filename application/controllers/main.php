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
			$sess_loginsuccess = $this->session->userdata("loggin_success");
			$data["user_EMAIL"] = $sess_loginsuccess["user_EMAIL"];
			$data["user_ADMIN"] = $sess_loginsuccess["user_ADMIN"];
			$data["user_FULLNAME"] = $sess_loginsuccess["user_FULLNAME"];
			$data["department_ID"] = $sess_loginsuccess["department_ID"];
			$data["usergroup_ID"] = $sess_loginsuccess["usergroup_ID"];
			$data["usergroup_NAME"] = $sess_loginsuccess["usergroup_NAME"];
			$data["department_NAME"] = $sess_loginsuccess["department_NAME"];
			$this->load->view("main/header");
			$this->load->view("main/userprofile",$data);
			$this->load->view("main/footer");	
		}
		
	}

	
}