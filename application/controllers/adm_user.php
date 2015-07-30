<?php
class adm_user extends CI_Controller{
	function index() {
			$data = array();
			//$this->load->model("sendmail_model");
			//echo $this->sendmail_model->testmail("maike.tv@live.com");
			
			$data["department"] = $this->user_model->department_record();
			$data["usergroup"] = $this->user_model->usergroup_record();
			$data["user"] = $this->user_model->get_record();
			
			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/user",$data);
			$this->load->view("main/footer");
		}
	function delete() {
			$this->user_model->delete_record();
			$data["Notify_info"] = "Delete Complete : ลบ '".
			rawurldecode($this->uri->segment(3))."' สำเร็จ";
			$data["Notify_Type"] = "success";
			
			$data["department"] = $this->user_model->department_record();
			$data["usergroup"] = $this->user_model->usergroup_record();
			$data["user"] = $this->user_model->get_record();
			
			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/user",$data);
			$this->load->view("main/footer");
		}
	function adduser() {

			if(isset($_POST["submit"])){ 				
			$user_EMAIL = $this->input->post('user_EMAIL');
			$user_PASSWORD = $this->input->post('user_PASSWORD');
			$user_EMAILRE = $this->input->post('user_EMAILRE');
			$user_PASSWORDRE = $this->input->post('user_PASSWORDRE');
			
			$user_FULLNAME = $this->input->post('user_FULLNAME');
			$department_ID = $this->input->post('department_ID');
			$usergroup_ID = $this->input->post('usergroup_ID');
			$data = array(
				'user_EMAIL' => $user_EMAIL,
				'user_PASSWORD' => $user_PASSWORD,
				'user_FULLNAME' => $user_FULLNAME,
				'department_ID' => $department_ID,
				'usergroup_ID' => $usergroup_ID,
				);
			$this->user_model->add_record($data);
			$data["Notify_info"] = "Insert Complete : บันทึก '".
			$user_EMAIL."' สำเร็จ";	
			$data["Notify_Type"] = "success";

			$data["department"] = $this->user_model->department_record();
			$data["usergroup"] = $this->user_model->usergroup_record();
			$data["user"] = $this->user_model->get_record();

			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/user",$data);
			$this->load->view("main/footer");						
			}
	}
	function emailcheck() {
				$user_EMAIL = $this->uri->segment(3);
				if($user_EMAIL!="") {
				$this->db->select("user_EMAIL");
				$this->db->from("adminsetting_user");
				$this->db->where("user_EMAIL",$user_EMAIL);
				$query = $this->db->get();
				$row = $query->row();
				if($query->num_rows()>0) {
					 return $row->user_EMAIL;
				}	
			}
	}
	function login() {

		if(isset($_POST["submit"])){ 	
			$user_EMAIL = $this->input->post("user_EMAIL");
			$user_PASSWORD = $this->input->post("user_PASSWORD");
			//echo $user_EMAIL;
			//echo do_hash($user_PASSWORD,'md5');

			//$this->db->select("user_EMAIL,user_PASSWORD,department_ID,usergroup_ID,user_FULLNAME");
			//$this->db->from("adminsetting_user");
			
			$this->db->select("*");
			$this->db->from("adminsetting_user user");
			$this->db->join("adminsetting_department dep","dep.department_ID=user.department_ID","left");
			$this->db->join("adminsetting_usergroup grp","grp.usergroup_ID=user.usergroup_ID","left");
			$this->db->where("user.user_EMAIL",$user_EMAIL);
			$this->db->where("user.user_PASSWORD",$user_PASSWORD);
			$query = $this->db->get();
			$row = $query->row();
			
			if($query->num_rows()>0) {
				//echo $user_EMAIL;
				// /echo $user_PASSWORD;
				if($row->usergroup_ID=="ADMIN"): 
				$user_ADMIN = true;
				else :  $user_ADMIN = false;
				endif;
				$sess_array = array(
					'user_ID'=>	$row->userID,
					'user_EMAIL'=>	$user_EMAIL,
					'user_ADMIN'=> 	$user_ADMIN,
					'user_FULLNAME' => $row->user_FULLNAME,
					'department_ID' => $row->department_ID,
					'usergroup_ID' => $row->usergroup_ID,
					'usergroup_NAME' => $row->usergroup_NAME,
					'department_NAME' => $row->department_NAME
				);
				$this->session->set_userdata('loggin_success',$sess_array);
				redirect(base_url()."main","refresh");
				
			} else {
				$data["Notify_info"] = "Login by: '".
				$user_EMAIL."' ไม่สำเร็จ";
				$data["Notify_Type"] = "danger";
				$this->load->view("main/header");
				$this->load->view("main/login",$data);
				$this->load->view("main/footer");
			}
		}
		$mysess = $this->session->userdata('loggin_success');
		echo $mysess["user_EMAIL"];
	}
	function logout() {		
   		$this->session->sess_destroy();
   		redirect(base_url()."main","refresh");
	}


}










