<?php
class department_model extends CI_Model{
	function get_record() {
    	$query = $this->db->get('adminsetting_department');
    	return $query->result();
    }
    function add_record($data){
    	$this->db->insert('adminsetting_department',$data);
    	return;
    }
    function update_record($data,$ID) {
    	$this->db->where('ID',$ID);
    	$this->db->update('adminsetting_department',$data);
    }
    function delete_record() {
    	$this->db->where('ID',$this->uri->segment(4));
    	$this->db->delete('adminsetting_department');
    }
}