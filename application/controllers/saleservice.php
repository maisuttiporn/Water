<?php
class saleservice extends CI_Controller{
	function index() {
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("main/footer.php");
	}
	function inquiry1() {
		$data=array();
		$this->load->model("saleservice_model");
		$data["DOC_ID"] =  $this->saleservice_model->getDOC_ID("mm@mm");

		if(isset($_POST["submit"])){
			$WASTECODE = $this->input->post("WASTECODE");
			$WASTEOWNER = $this->input->post("WASTEOWNER");
			$DATE = $this->input->post("DATE");
			$WASTENAME = $this->input->post("WASTENAME");
			$FACTNAME = $this->input->post("FACTNAME");
			$FACTADDR = $this->input->post("FACTADDR");
			$FACTCONTACT = $this->input->post("FACTCONTACT");
			$FACTPOSITION = $this->input->post("FACTPOSITION");
			$FACTTEL = $this->input->post("FACTTEL");
			$FACTFAX = $this->input->post("FACTFAX");
			$FACTEMAIL = $this->input->post("FACTEMAIL");
			$sess_inquiry1 = array(
				'WASTECODE' => $WASTECODE,
				'WASTEOWNER' => $WASTEOWNER,
				'DATE' => $DATE,
				'WASTENAME' => $WASTENAME,
				'FACTNAME' => $FACTNAME,
				'FACTADDR' => $FACTADDR,
				'FACTCONTACT' => $FACTCONTACT,
				'FACTPOSITION' => $FACTPOSITION,
				'FACTTEL' => $FACTTEL,
				'FACTFAX' => $FACTFAX,
				'FACTEMAIL' => $FACTEMAIL
			);
			$this->session->set_userdata("new_inquiry1",$sess_inquiry1);
		}	
		
		$data["inquiry1"] = $this->session->userdata("new_inquiry1");
		//if($this->session->userdata("new_inquiry1")) :
		//	echo "new_inquiry1"; 
		//endif;
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry1.php",$data);
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function unset_inquiry1($kind) {
		if($kind=="new"):
			$this->session->unset_userdata("new_inquiry1");
		endif;
		redirect(base_url()."saleservice/inquiry1","refresh");
	}
	function inquiry2() {
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry2.php");
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function inquiry3() {
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry3.php");
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function inquiry4() {
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry4.php");
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function quotation() {
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/quotation.php");
		$this->load->view("main/footer.php");
	}
	function issue_newinquiry(){
		$this->load->model("saleservice_model");
		$DOC_ID = $this->saleservice_model->gennewID();
		$sess_inquiry1 = $this->session->userdata("new_inquiry1");		
		$data = array(
			"DOC_ID" => $DOC_ID,
			'inquiry_WASTECODE' => $sess_inquiry1["WASTECODE"],
			'inquiry_WASTEOWNER' => $sess_inquiry1["WASTEOWNER"],
			'inquiry_DATE' => $sess_inquiry1["DATE"],
			'inquiry_WASTENAME' => $sess_inquiry1["WASTENAME"],
			'inquiry_FACTNAME' => $sess_inquiry1["FACTNAME"],
			'inquiry_FACTADDR' => $sess_inquiry1["FACTADDR"],
			'inquiry_FACTCONTACT' => $sess_inquiry1["FACTCONTACT"],
			'inquiry_FACTPOSITION' => $sess_inquiry1["FACTPOSITION"],
			'inquiry_FACTTEL' => $sess_inquiry1["FACTTEL"],
			'inquiry_FACTFAX' => $sess_inquiry1["FACTFAX"],
			'inquiry_FACTEMAIL' => $sess_inquiry1["FACTEMAIL"],
			'inquiry_CREATEBY' => "xx"
		);
		
		$this->saleservice_model->issue_newinquiry1($data);
		$this->session->unset_userdata("new_inquiry1");
		redirect(saleservice_url(),"refresh");
	}

}













