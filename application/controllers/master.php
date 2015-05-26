<?php
class master extends CI_Controller {
	function index(){
		$this->load->view("main/header");
		$this->load->view("master/index");
		$this->load->view("main/footer");
	} 
	function user() {
		$this->load->view("main/header");
		$this->load->view("master/user");
		$this->load->view("main/footer");
	}
	function usrgrp() {
		$this->load->view("main/header");
		$this->load->view("master/group");
		$this->load->view("main/footer");
	}
	function usrgrp_create() {
		$data = array(
			'usrgrp_id'=> $this->input->post('usrgrp_id'),
			'usrgrp_name' => $this->input->post('usrgrp_name')
		);
		$this->usrgrpMODEL->create_record($data);
		$this->usrgrp();
	}

}