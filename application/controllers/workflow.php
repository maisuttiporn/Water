<?php
class workflow extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
/*
*	Tech Review function 
*	Create by maisuttiporn@gmail.com
*	20-Jul15 14.40
*/
	function techreview_app() {
		$data = array();
		$qt_id = $this->input->get("qt_id");
		$msg_id = $this->input->get("msg_id");
		$this->load->model("saleservice_model");
		$this->load->model("workflow_model");

		$data["msg"] = $this->workflow_model->getitem_msg($msg_id);
		$data["quotation"] = $this->saleservice_model->getitem_quotation($qt_id);
		$data["quotationdesc"] = $this->saleservice_model->getitem_quotationdesc($qt_id);
		
		$this->load->view("main/header");
		$this->load->view("workflow/techreview_app",$data);
		$this->load->view("main/footer");
	}
	function techreview_submit() {
		$data = array();
		if(!empty($_POST["submit"])) {
		$mysess = $this->session->userdata('loggin_success');
		$user_FULLNAME = $mysess["user_FULLNAME"];	
		$user_EMAIL = $mysess["user_EMAIL"];		
		$user_ID = $mysess["user_ID"];
		$usergroup_ID = $mysess["usergroup_ID"];			

		$this->load->model("workflow_model");
		$msg_body = $this->input->post("msg_body");
		$qt_id = $this->input->post("qt_id");
		$DOC_ID = $this->input->post("DOC_ID");
		$qt_compname = $this->input->post("qt_compname");
		
		$userto_email = $this->input->post("userfrom_email");
		$userto_name =  $this->input->post("userfrom_name");
		$userto_id =  $this->input->post("userfrom_id");
		$userto_usergroup_ID =  $this->input->post("userfrom_usergroup_ID");

		$app =  $this->input->post("app");		
		/**/
				$data = array(
					"msg_body"		=>	$msg_body,
					"msg_type"		=>	"techreviewapp",
					"msg_approve"	=>	$app,

					"userfrom_id"		=>	$user_ID,
					"userfrom_email"	=>	$user_EMAIL,
					"userfrom_name"	=>	$user_FULLNAME,
					"userfrom_usergroup_ID"	=>	$usergroup_ID,

					"userto_id"		=>	$userto_id,
					"userto_email"		=>	$userto_email,
					"userto_name"		=>	$userto_name,
					"userto_usergroup_ID"	=>	$userto_usergroup_ID,

					"REF1"			=> 	$qt_id,
					"REF2"			=>	$qt_compname,
				);
				$this->workflow_model->new_workflow($data); 
				$this->load->model("sendmail_model");
				$this->sendmail_model->techreviewapp_mail($userto_email,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME);

		$this->workflow_model->techreviewapp_updateqt($qt_id,$user_ID,$app);
		if($this->workflow_model->techreview_checkapp($qt_id)) :	
			echo "aa";	

			if(!$this->workflow_model->techreviewprove_check($qt_id)) :
				echo "bb";
				$data = array(
					"msg_body"		=>	"มีการอนุมัติตามเงื่อไข",
					"msg_type"		=>	"techreviewprove",
					"msg_approve"	=>	"none",

					"userfrom_id"		=>	"System",
					"userfrom_email"	=>	"system@thaionlyone.com",
					"userfrom_name"	=>	"System",
					"userfrom_usergroup_ID"	=>	"System",

					"userto_id"		=>	$userto_id,
					"userto_email"		=>	$userto_email,
					"userto_name"		=>	$userto_name,
					"userto_usergroup_ID"	=>	$userto_usergroup_ID,

					"REF1"			=> 	$qt_id,
					"REF2"			=>	$qt_compname,
				);
				$this->workflow_model->new_workflow($data); 
			endif;
		else :
			//echo "false";
		endif;
		redirect('../taskprocess','refresh');
		}
	}
/*
*	MD Review  function 
*	Create by maisuttiporn@gmail.com
*	20-Jul15 14.40
*/
	function mdreview() {
		$data = array();
		$qt_id = $this->input->get("qt_id");
		$msg_id = $this->input->get("msg_id");
		$this->load->model("saleservice_model");
		$this->load->model("workflow_model");

		$data["msg"] = $this->workflow_model->getitem_msg($msg_id);
		$data["quotation"] = $this->saleservice_model->getitem_quotation($qt_id);
		$data["quotationdesc"] = $this->saleservice_model->getitem_quotationdesc($qt_id);
		$data["msgall"] = $this->workflow_model->get_msg($qt_id);
		
		$this->load->view("main/header");
		$this->load->view("workflow/mdreview_send",$data);
		$this->load->view("main/footer");
	}
	function mdreview_submit() {
		$data = array();
		if(!empty($_POST["submit"])) {
		$mysess = $this->session->userdata('loggin_success');
		$user_FULLNAME = $mysess["user_FULLNAME"];	
		$user_EMAIL = $mysess["user_EMAIL"];		
		$user_ID = $mysess["user_ID"];
		$usergroup_ID = $mysess["usergroup_ID"];			

		$this->load->model("workflow_model");
		$msg_body = $this->input->post("msg_body");
		$qt_id = $this->input->post("qt_id");
		$DOC_ID = $this->input->post("DOC_ID");
		$qt_compname = $this->input->post("qt_compname");
		
		$userto_email = $this->input->post("userfrom_email");
		$userto_name =  $this->input->post("userfrom_name");
		$userto_id =  $this->input->post("userfrom_id");
		$userto_usergroup_ID =  $this->input->post("userfrom_usergroup_ID");

		$app =  $this->input->post("app");

		$md = $this->workflow_model->get_md();
		foreach($md as $row) :
			$data = array(
				"msg_body"		=>	$msg_body,
				"msg_type"		=>	"mdreview",
				"msg_approve"	=>	$app,

				"userfrom_id"		=>	$user_ID,
				"userfrom_email"	=>	$user_EMAIL,
				"userfrom_name"	=>	$user_FULLNAME,
				"userfrom_usergroup_ID"	=>	$usergroup_ID,
				
				"userto_id"		=>	$row->userID,
				"userto_email"		=>	$row->user_EMAIL,
				"userto_name"		=>	$row->user_FULLNAME,
				"userto_usergroup_ID"	=>	$row->usergroup_ID,

				"REF1"			=> 	$qt_id,
				"REF2"			=>	$qt_compname,
			);
		$this->workflow_model->new_workflow($data); 
		$this->load->model("sendmail_model");
		$this->sendmail_model->techreviewapp_mail($row->user_EMAIL,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME);
		$this->workflow_model->techreviewprove_updateqt($qt_id,$user_ID,$app);
		endforeach;		
		redirect('../taskprocess','refresh');
		}
	}
	function mdreview_app() {
		$data = array();
		$qt_id = $this->input->get("qt_id");
		$msg_id = $this->input->get("msg_id");
		$this->load->model("saleservice_model");
		$this->load->model("workflow_model");

		$data["msg"] = $this->workflow_model->getitem_msg($msg_id);
		$data["quotation"] = $this->saleservice_model->getitem_quotation($qt_id);
		$data["quotationdesc"] = $this->saleservice_model->getitem_quotationdesc($qt_id);
		$data["msgall"] = $this->workflow_model->get_msg($qt_id);
		
		$this->load->view("main/header");
		$this->load->view("workflow/mdreview_app",$data);
		$this->load->view("main/footer");
	}
	function md_submit() {
		$data = array();
		if(!empty($_POST["submit"])) {
		$mysess = $this->session->userdata('loggin_success');
		$user_FULLNAME = $mysess["user_FULLNAME"];	
		$user_EMAIL = $mysess["user_EMAIL"];		
		$user_ID = $mysess["user_ID"];
		$usergroup_ID = $mysess["usergroup_ID"];			

		$this->load->model("workflow_model");
		$msg_body = $this->input->post("msg_body");
		$qt_id = $this->input->post("qt_id");
		$DOC_ID = $this->input->post("DOC_ID");
		$qt_compname = $this->input->post("qt_compname");
		
		$userto_email = $this->input->post("userfrom_email");
		$userto_name =  $this->input->post("userfrom_name");
		$userto_id =  $this->input->post("userfrom_id");
		$userto_usergroup_ID =  $this->input->post("userfrom_usergroup_ID");

		$app =  $this->input->post("app");

		$md = $this->workflow_model->get_md();
		
			$data = array(
				"msg_body"		=>	$msg_body,
				"msg_type"		=>	"mdprove",
				"msg_approve"	=>	$app,

				"userfrom_id"		=>	$user_ID,
				"userfrom_email"	=>	$user_EMAIL,
				"userfrom_name"	=>	$user_FULLNAME,
				"userfrom_usergroup_ID"	=>	$usergroup_ID,
				
				"userto_id"		=>	$userto_id,
				"userto_email"		=>	$userto_email,
				"userto_name"		=>	$userto_name,
				"userto_usergroup_ID"	=>	$userto_usergroup_ID,
				
				"REF1"			=> 	$qt_id,
				"REF2"			=>	$qt_compname,
			);
		$this->workflow_model->new_workflow($data); 
		$this->load->model("sendmail_model");
		$this->sendmail_model->techreviewapp_mail($userto_email,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME);
		$this->workflow_model->mdreview_update($qt_id,$user_ID,$app);
		}
		redirect('../taskprocess','refresh');
	}
}







