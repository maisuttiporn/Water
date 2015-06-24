<?php
class saleservice_model extends CI_Model{

	function gennewID() {	
			$this->db->select("max(ID) as ID,DOC_ID");
			$this->db->from("saleservice_inquiry1");
			$query = $this->db->get();
			$row = $query->row();			
			return "DOC" . sprintf("%07d", ($row->ID+1));		
	}
	function getDOC_ID($user_EMAIL) {
		$this->db->select("ID,inquiry_CREATEBY,DOC_ID,inquiry_STATUS");
		$this->db->from("saleservice_inquiry1");
		$this->db->where("inquiry_CREATEBY",$user_EMAIL);
		$this->db->where("inquiry_STATUS","NEW");
		$query = $this->db->get();
		$row = $query->row();		
		if($query->num_rows()>0) :
			return $row->DOC_ID;
		else :
			return "New Document";
		endif;
	}

	function issue_newinquiry1($data){
    	$this->db->insert('saleservice_inquiry1',$data);
    	return;
    }

}















