<?php
class taskprocess_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function inbox_process($user_email) {		
		$this->db->select("*");
        $this->db->from("workflow");
        $this->db->where("userto_email",$user_email);
        $this->db->order_by("ID","desc");
        $query = $this->db->get();
        return $query->result();
	}
	function sentitems_process($user_email) {		
		$this->db->select("*");
        $this->db->from("workflow");
        $this->db->where("userfrom_email",$user_email);
        $this->db->order_by("ID","desc");
        $query = $this->db->get();
        return $query->result();
	}
}