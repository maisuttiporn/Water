<?php
class user_model extends CI_Model{
	function department_record() {
		$this->db->order_by('department_ID');
		$query = $this->db->get('adminsetting_department');
    	return $query->result();
	}
	function  usergroup_record() {
		$this->db->order_by('usergroup_ID');
		$query = $this->db->get('adminsetting_usergroup');
    	return $query->result();
	}


	function get_record() {
    	$query = $this->db->get('adminsetting_user');
    	return $query->result();
    }
    function add_record($data){
    	$this->db->insert('adminsetting_user',$data);
    	return;
    }
    function update_record($data,$ID) {
    	$this->db->where('unit_ID',$ID);
    	$this->db->update('adminsetting_user',$data);
    }
    function delete_record() {
    	$this->db->where('user_EMAIL',$this->uri->segment(3));
    	$this->db->delete('adminsetting_user');
    }
}