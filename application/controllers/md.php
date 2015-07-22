<?php
class md extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function index(){
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("md/md.php");
		$this->load->view("main/footer.php");
	}
}