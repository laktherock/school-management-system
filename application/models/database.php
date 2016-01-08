<?php
class dbconn extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function val(){
		$this->db->select('*');
		$this->db->from('regi');
		$query = $this->db->val();
		return $query->result();
		print_r(result());
	}
}
?>