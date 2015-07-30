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
		$data = array();
		if($query=$this->usrgrp_model->get_record()) {
			$data['record'] = $query;
		}
		$this->load->view("main/header");
		$this->load->view("master/group",$data);
		$this->load->view("main/footer");
	}
	function usrgrp_create() {
		$data = array(
			'usrgrp_id'=> $this->input->post('usrgrp_id'),
			'usrgrp_name' => $this->input->post('usrgrp_name')
		);
		$this->usrgrp_model->create_record($data);
		redirect(master_url() . 'usrgrp','refresh');
	}
	function usrgrp_delete(){		
		$this->usrgrp_model->delete_record();
		redirect(master_url() . 'usrgrp','refresh');
	}
	function usrgrp_update() {
		$data = array(
			'usrgrp_id'=> 'xx',
			'usrgrp_name'=> 'yy'
		);
		$this->usrgrp_model->update_record($data,'47');
	}
	
}





