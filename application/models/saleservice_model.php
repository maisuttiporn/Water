<?php
class saleservice_model extends CI_Model{

	function gennewID() {	
			$this->db->select("max(ID) as ID,DOC_ID");
			$this->db->from("docflow");
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
    function techreview_submit($data){
        $this->db->insert('workflow',$data);
        return;
    }
	function issue_newinquiry1($data){
    	$this->db->insert('saleservice_inquiry1',$data);
    	return;
    }
    function issue_newinquiry2($data){
    	$this->db->insert('saleservice_inquiry2',$data);
    	return;
    }
    function issue_newinquiry2_watercomponent($data){
    	$this->db->insert('saleservice_inquiry2_wastecomponent',$data);
    	return;
    }
    function issue_newinquiry3($data){
    	$this->db->insert('saleservice_inquiry3',$data);
    	return;
    }
    function issue_newinquiry4($data){
    	$this->db->insert('saleservice_inquiry4',$data);
    	return;
    }
    function issue_docflow($data){
    	$this->db->insert('docflow',$data);
    	return;
    }

    function save_quotation($data){
    	$this->db->insert('saleservice_quotation',$data);
    	return;
    }
    function save_quotationdesc($data){
    	$this->db->insert('saleservice_quotationdesc',$data);
    	return;
    }

    function genqt_id(){
    	$this->db->select("max(ID) as ID");
		$this->db->from("saleservice_quotation");
		$query = $this->db->get();
		$id = $query->row()->ID+1;
		return "TOMS_" . sprintf("%05d", ($id+1)) . "/" . (date("Y")+543);
    }
    
	function get_inquiry1() {
		$query = $this->db->get('saleservice_inquiry1');
		return $query->result();
    }
    function get_quotation() {
		$query = $this->db->get('saleservice_quotation');
		return $query->result();
    }
    function getitem_inquiry1($DOC_ID) {
    	// Get By ITEM
		//$query = $this->db->get('saleservice_inquiry1');
		$this->db->select("*");
		$this->db->from("saleservice_inquiry1");
		$this->db->where("DOC_ID",$DOC_ID);
		$query = $this->db->get();	
		return $query->row();
    }

    function getitem_quotation($qt_id) {
        // Get By ITEM
        //$query = $this->db->get('saleservice_inquiry1');
        $this->db->select("*");
        $this->db->from("saleservice_quotation");
        $this->db->where("qt_id",$qt_id);
        $query = $this->db->get();
        return $query->row();
    }
    function getitem_quotationdesc($qt_id) {
        // Get By ITEM
        //$query = $this->db->get('saleservice_inquiry1');
        $this->db->select("*");
        $this->db->from("saleservice_quotationdesc");
        $this->db->where("qt_id",$qt_id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_env(){
        $this->db->select("*");
        $this->db->from("adminsetting_user");
        $this->db->where("usergroup_ID","ENVGRP");
        $query = $this->db->get();
        return $query->result();
    }
    function get_opt(){
        $this->db->select("*");
        $this->db->from("adminsetting_user");
        $this->db->where("usergroup_ID","OPTGRP");
        $query = $this->db->get();
        return $query->result();
    }
    
    function techreview_updateqt($qt_id) {
        $data = array(
            "qt_status" => "techreview"
        );
        $this->db->where("qt_id",$qt_id);
        $this->db->update("saleservice_quotation",$data); 
    }
}
















