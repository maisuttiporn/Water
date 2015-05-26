<?php
class main extends CI_Controller {
	function index() {
		$this->load->view("main/header");
		$this->load->view("main/login");
		$this->load->view("main/footer");
	}
}