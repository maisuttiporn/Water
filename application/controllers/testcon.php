<?php
class testcon extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function getuser3tb() {
		$this->db->select("*");
		$this->db->from("adminsetting_user user");
		$this->db->join("adminsetting_department dep","dep.department_ID=user.department_ID","left");
		$this->db->join("adminsetting_usergroup grp","grp.usergroup_ID=user.usergroup_ID","left");
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			echo $row->user_EMAIL . " " . $row->department_NAME.  " ". $row->usergroup_NAME ."<br>";
		}
	}
	function see_sees(){
		session_start();
	    echo "<h3> PHP List All Session Variables</h3>";
	    echo "<pre>";
	    print_r($this->session->all_userdata());
	    echo "</pre>";
	}
	function see_wastecomponent() {
		$sess_wastecomponent = $this->session->userdata("wastecomponent");
		//echo json_encode($sess_wastecomponent);
		foreach($sess_wastecomponent  as $row) :
			echo $row["wastecomponent"] . "<>";
		endforeach;
	}

	function testmail() {
		$this->load->model("sendmail_model");
		if(!$this->sendmail_model->testmail("maike.tv@live.com")){
			echo $this->email->print_debugger();
		} else {
			echo "ok";
			echo $this->email->print_debugger();
		}
	}
function test_pdf(){
//this data will be passed on to the view
$data['the_content']='mPDF and CodeIgniter are cool!';

//load the view, pass the variable and do not show it but "save" the output into $html variable
$html=$this->load->view('pdf_report', $data, true); 
//$html="<h1>Test Html</h1><hr>";
//this the the PDF filename that user will get to download
//$pdfFilePath = "the_pdf_output.pdf";

//load mPDF library
$this->load->library('pdf');


//actually, you can pass mPDF parameter on this load() function
$pdf = $this->pdf->load();
$pdf->SetAutoFont();
//generate the PDF!
$pdf->WriteHTML($html);
//offer it to user via browser download! (The PDF won't be saved on your server HDD)
$pdf->Output($pdfFilePath, "I");
	}
}