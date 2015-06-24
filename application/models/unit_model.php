<?php
class unit_model extends CI_Model{
	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_record() {
    	$query = $this->db->get('adminsetting_unit');
    	return $query->result();
    }
    function add_record($data){
    	$this->db->insert('adminsetting_unit',$data);
    	return;
    }
    function update_record($data,$ID) {
    	$this->db->where('unit_ID',$ID);
    	$this->db->update('adminsetting_unit',$data);
    }
    function delete_record() {
    	$this->db->where('unit_ID',$this->uri->segment(4));
    	$this->db->delete('adminsetting_unit');
    }
 }