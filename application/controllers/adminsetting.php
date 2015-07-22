<?php
class adminsetting extends CI_Controller {
		function index() {
			$this->load->view("main/header");
			$this->load->view("main/userinfo");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("main/footer");		
		}
//UNIT/////////////////////////////////////////////////////////////////////////////////////////		
		function unit() {
			//$this->load->library("form_validation"); //load validation lib.
			$data = array();
	/*	
	*	Add new Unit to DB
	*/		
			if(isset($_POST["submit"])){ 
				//form validation			
				$unit_NAME = $this->input->post('unit_NAME');
				$formchk = $this->form_validation;
				$ar_chk = array(
						array(
							'field'=>'unit_NAME',
							'label'=>'Unit Name',
							'rules'=>'required'
						)
					);
				$formchk->set_rules($ar_chk);
				//form validation
				//check form
				if($formchk->run()==false) {
					$data["Notify_info"] = "Insert Incomplete : เพิ่มไม่สำเร็จ";
					$data["Notify_Type"] = "danger";
				} else {					
					$data = array(
						'unit_NAME' => $unit_NAME
						);
					$this->unit_model->add_record($data);
					$data["Notify_info"] = "Insert Complete : บันทึก '".$unit_NAME."' สำเร็จ";	
					$data["Notify_Type"] = "success";
				}					
			}
	/*	
	*	Update new Unit to DB
	*/
			if(isset($_POST["update"])){ 
				//form validation		
				$unit_NAME = $this->input->post('unit_NAME');	
				$formchk = $this->form_validation;
				$ar_chk = array(
						array(
							'field'=>'unit_NAME',
							'label'=>'Unit Name',
							'rules'=>'required'
						)
					);
				$formchk->set_rules($ar_chk);
				//form validation
				//check form
				if($formchk->run()==false) {
					$data["Notify_info"] = "update Incomplete : แก้ไข '".$unit_NAME."' ไม่สำเร็จ";
					$data["Notify_Type"] = "danger";
				} else {					
					$data = array(
						'unit_NAME' => $unit_NAME
						);
					$this->unit_model->update_record($data,$this->input->post('unit_ID'));
					$data["Notify_info"] = "update Complete : แก้ไข '".$unit_NAME."' สำเร็จ";
					$data["Notify_Type"] = "success";	
				}					
			}
			/*	
			*	Delete  Unit from  DB by segment number 5
			*/	
			if($this->uri->segment(3)=="delete") {
				$this->unit_model->delete_record();
				$data["Notify_info"] = "Delete Complete : ลบ '".
				rawurldecode($this->uri->segment(5))."' สำเร็จ";
				$data["Notify_Type"] = "success";
			}
			$query = $this->db->get("adminsetting_unit");
			$data["unit"] = $query->result();
			
			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/unit",$data);
			$this->load->view("main/footer");
		}
//UNIT/////////////////////////////////////////////////////////////////////////////////////////	

//USERGROUP///////////////////////////////////////////////////////////////////////////////////	
		function usergroup() {
			$data=array();
			//$this->load->library("form_validation"); //load validation lib.
			/*	
			*	Add new usergroup to DB
			*/	
			if(isset($_POST["submit"])){
				$usergroup_ID = $this->input->post('usergroup_ID');
				$usergroup_NAME = $this->input->post('usergroup_NAME');
				//form validation			
				$formchk = $this->form_validation;
				$ar_chk = array(
						array(
							'field'=>'usergroup_ID',
							'label'=>'User Group ID',
							'rules'=>'required|callback_usergroup_addcheck'
						),
						array(
							'field'=>'usergroup_NAME',
							'label'=>'User Group Name',
							'rules'=>'required'
						)
					);
				$formchk->set_rules($ar_chk);
				//form validation
				//check formm
				if($formchk->run()==false) {
					$data["Notify_info"] = "Insert Incomplete : เพิ่ม '".$usergroup_NAME."' ไม่สำเร็จ";
					$data["Notify_Type"] = "danger";
				} else {					
					$data = array(
						'usergroup_ID' => $usergroup_ID,
						'usergroup_NAME' => $usergroup_NAME,
						);
					$this->usergroup_model->add_record($data);
					$data["Notify_info"] = "Insert Complete : บันทึก ".$usergroup_NAME." สำเร็จ";
					$data["Notify_Type"] = "success";	
				}					
			}
			/*	
			*	Update new usergroup to DB
			*/	
			if(isset($_POST["update"])){
				$ID = $this->input->post('ID');
				$usergroup_ID = $this->input->post('usergroup_ID');
				$usergroup_NAME = $this->input->post('usergroup_NAME');
				//form validation			
				$formchk = $this->form_validation;
				$ar_chk = array(
						array(
							'field'=>'usergroup_ID',
							'label'=>'User Group ID',
							'rules'=>'required|callback_usergroup_updatecheck'
						),
						array(
							'field'=>'usergroup_NAME',
							'label'=>'User Group Name',
							'rules'=>'required'
						)
					);
				$formchk->set_rules($ar_chk);
				//form validation
				//check formm
				if($formchk->run()==false) {
					$data["Notify_info"] = "Insert Incomplete : เพิ่ม '".$usergroup_NAME."' ไม่สำเร็จ";
					$data["Notify_Type"] = "danger";
				} else {					
					$data = array(
						'usergroup_ID' => $usergroup_ID,
						'usergroup_NAME' => $usergroup_NAME,
						);
					$this->usergroup_model->update_record($data,$ID);
					$data["Notify_info"] = " Update Complete : แก้ไข ".$usergroup_NAME." สำเร็จ";
					$data["Notify_Type"] = "success";	
				}					
			}
			if($this->uri->segment(3)=="delete") {
				$this->usergroup_model->delete_record();
				$data["Notify_info"] = "Delete Complete : ลบ '".
				rawurldecode($this->uri->segment(5))."' สำเร็จ";
				$data["Notify_Type"] = "success";
			}

			$query = $this->db->get("adminsetting_usergroup");
			$data["usergroup"] = $query->result();
			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/usergroup",$data);
			$this->load->view("main/footer");
		}
/* 
	CALL BACK FOR CHECK usergroup existing!!
*/
		function usergroup_addcheck($usergroup_ID){
			$this->db->where('usergroup_ID',$usergroup_ID);
			$query = $this->db->get("adminsetting_usergroup");
			if($query->num_rows() > 0) {
				return false;
			} else {
				return true;
			}
		}
		function usergroup_updatecheck($usergroup_ID){
			$this->db->where('usergroup_ID',$usergroup_ID);
			$query = $this->db->get("adminsetting_usergroup");
			if($query->num_rows() > 1) {
				return false;
			} else {
				return true;
			}
		}
		
//USERGROUP/////////////////////////////////////////////////////////////////////////////////////////
//DEPARTMENT////////////////////////////////////////////////////////////////////////////////////////	
		function department() {
			$data = array();
			/*	
			*	Add new department to DB
			*/	
			if(isset($_POST["submit"])){
				$department_ID = $this->input->post('department_ID');
				$department_NAME = $this->input->post('department_NAME');
				//form validation			
				$formchk = $this->form_validation;
				$ar_chk = array(
						array(
							'field'=>'department_ID',
							'label'=>'department ID',
							'rules'=>'required|callback_department_addcheck'
						),
						array(
							'field'=>'department_NAME',
							'label'=>'department Name',
							'rules'=>'required'
						)
					);
				$formchk->set_rules($ar_chk);
				//form validation
				//check formm
				if($formchk->run()==false) {
					$data["Notify_info"] = "Insert Incomplete : เพิ่ม '".$department_NAME."' ไม่สำเร็จ";
					$data["Notify_Type"] = "danger";
				} else {					
					$data = array(
						'department_ID' => $department_ID,
						'department_NAME' => $department_NAME,
						);
					$this->department_model->add_record($data);
					$data["Notify_info"] = "Insert Complete : บันทึก ".$department_NAME." สำเร็จ";
					$data["Notify_Type"] = "success";	
				}					
			}
			/*	
			*	Update new department to DB
			*/	
			if(isset($_POST["update"])){
				$ID = $this->input->post('ID');
				$department_ID = $this->input->post('department_ID');
				$department_NAME = $this->input->post('department_NAME');
				//form validation			
				$formchk = $this->form_validation;
				$ar_chk = array(
						array(
							'field'=>'department_ID',						
							'rules'=>'required|callback_usergroup_updatecheck'
						),
						array(
							'field'=>'department_NAME',							
							'rules'=>'required'
						)
					);
				$formchk->set_rules($ar_chk);
				//form validation
				//check formm
				if($formchk->run()==false) {
					$data["Notify_info"] = "Insert Incomplete : เพิ่ม '".$department_NAME."' ไม่สำเร็จ";
					$data["Notify_Type"] = "danger";
				} else {					
					$data = array(
						'department_ID' => $department_ID,
						'department_NAME' => $department_NAME,
						);
					$this->department_model->update_record($data,$ID);
					$data["Notify_info"] = " Update Complete : แก้ไข ".$department_NAME." สำเร็จ";
					$data["Notify_Type"] = "success";	
				}					
			}
			if($this->uri->segment(3)=="delete") {
				$this->department_model->delete_record();
				$data["Notify_info"] = "Delete Complete : ลบ '".
				rawurldecode($this->uri->segment(5))."' สำเร็จ";
				$data["Notify_Type"] = "success";
			}
			$this->db->order_by("department_ID");
			$query = $this->db->get("adminsetting_department");
			$data["department"] = $query->result();
			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/department",$data);
			$this->load->view("main/footer");
		}
		function department_addcheck($department_ID){
			$this->db->where('department_ID',$department_ID);
			$query = $this->db->get("adminsetting_department");
			if($query->num_rows() > 0) {
				return false;
			} else {
				return true;
			}
		}
//DEPARTMENT////////////////////////////////////////////////////////////////////////////////////////	
//PERMISSION ///////////////////////////////////////////////////////////////////////////////////////
		function permission() {
			$data = array();
			
			$this->load->view("main/header");
			$this->load->view("adminsetting/adminsetting");
			$this->load->view("adminsetting/permission",$data);
			$this->load->view("main/footer");
		}

//PERMISSION ///////////////////////////////////////////////////////////////////////////////////////

	} //class






