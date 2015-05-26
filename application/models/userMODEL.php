<?php
class userMODEL extends CI_Model{
	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_record() {
    	$query = $this->db->get('usrgrp');
    	return $query->result();
    }
    function add_record($data){
    	$this->db->insert('usrgrp',$data);
    	return;
    }
    function update_record($data,$ID) {
    	$this->db->where('ID',$ID);
    	$this->db->update('usrgrp',$data);
    }
    function delete_record() {
    	$this->db->where('ID',$this->uri->segment(3));
    	$this->db->delete('usrgrp');
    }
}