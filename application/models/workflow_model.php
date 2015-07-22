<?php
class workflow_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function getitem_msg($msg_id){
	    	$this->db->select("*");
	        	$this->db->from("workflow");
	        	$this->db->where("ID",$msg_id);
	        	$query = $this->db->get();
	        	return $query->row();
    	}
    	function get_msg($qt_id){
	    	$this->db->select("*");
	        	$this->db->from("workflow");
	        	$this->db->where("REF1",$qt_id);
	        	$query = $this->db->get();
	        	return $query->result();
    	}
    	function new_workflow($data){
        		$this->db->insert('workflow',$data);
        		return;
    	}
    	function techreview_checkapp($qt_id) {    		
		$this->db->select("*");
	        	$this->db->from("workflow");
	        	$this->db->where("msg_type","techreviewapp");
	        	$this->db->where("msg_approve","yes");
	        	$this->db->where("REF1",$qt_id);
	        	$this->db->where("userfrom_usergroup_ID","ENVGRP");
	        	$query = $this->db->get();
	         	//$row =  $query->row();
	        	if($query->num_rows()>0) :
	        		$this->db->select("*");
		        	$this->db->from("workflow");
		        	$this->db->where("msg_type","techreviewapp");
		        	$this->db->where("msg_approve","yes");
		        	$this->db->where("REF1",$qt_id);
		        	$this->db->where("userfrom_usergroup_ID","OPTGRP");
		        	$query = $this->db->get();
		        	if($query->num_rows()>0) :
		        		return true;
		        	else : 
		        		return false;
		        	endif;
	        	else :
	        		return false;
	        	endif; 
    	}
    	function techreviewprove_check($qt_id) { // เช็คว่าครบแล้วส่งไปหรือยัง
    		$this->db->select("*");
		$this->db->from("workflow");
		$this->db->where("msg_type","techreviewprove");
		$this->db->where("REF1",$qt_id);
		$query = $this->db->get();
		if($query->num_rows()>0) : 
			return true;
		else :
			return false;
		endif;
    	}
    	function techreviewapp_updateqt($qt_id,$userto_id,$app) {
	        $data = array(
	            "msg_status" => "done",
	           // "msg_approve"	=> $app
	        );
	        $this->db->where("REF1",$qt_id);
	        $this->db->where("msg_type","techreview");
	        $this->db->where("userto_id",$userto_id);
	        $this->db->update("workflow",$data); 
   	 }

   	 function techreviewprove_updateqt($qt_id,$userto_id,$app) {
	        $data = array(
	            "msg_status" => "done",
	           // "msg_approve"	=> $app
	        );
	        $this->db->where("REF1",$qt_id);
	        $this->db->where("msg_type","techreviewprove");
	        $this->db->where("userto_id",$userto_id);
	        $this->db->update("workflow",$data); 
   	 }

   	  function mdreview_update($qt_id,$userto_id,$app) {
	        $data = array(
	            "msg_status" => "done",
	           // "msg_approve"	=> $app
	        );
	        $this->db->where("REF1",$qt_id);
	        $this->db->where("msg_type","mdreview");
	        $this->db->where("userto_id",$userto_id);
	        $this->db->update("workflow",$data); 
   	 }



   	 function get_md() {
   	        $this->db->select("*");
	        $this->db->from("adminsetting_user");
	        $this->db->where("usergroup_ID","MDGRP");
	        $query = $this->db->get();
	        return $query->result();
   	 }
}







