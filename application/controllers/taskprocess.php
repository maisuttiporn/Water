<?php
class taskprocess extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function index() {
		$data = array();
		$mysess = $this->session->userdata('loggin_success');
		$user_email = $mysess["user_EMAIL"];
		//echo $user_id;
		$this->load->model("taskprocess_model");
		$data["inbox_process"] =  $this->taskprocess_model->inbox_process($user_email);
		$data["sentitems_process"] =  $this->taskprocess_model->sentitems_process($user_email);
		
			$this->load->view("main/header");
			$this->load->view("taskprocess/index",$data);
			$this->load->view("main/footer");
	}
}