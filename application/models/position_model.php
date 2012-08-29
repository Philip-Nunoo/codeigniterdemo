<?php
class Position_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function get_all_positions(){
		$sql = "SELECT * FROM positions";
		$query = $this->db->query($sql);

		return $query->result();
	}
}
?>
