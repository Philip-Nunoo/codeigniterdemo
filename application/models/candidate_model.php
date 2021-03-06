<?php
class Candidate_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function get_all_candidates(){
		$sql = "SELECT * FROM candidates";
		$query = $this->db->query($sql);

		return $query->result();
	}
	
	public function get_presidential_candidates(){
		//building the query string
		//$sql = "INSERT INTO table (title) VALUES(".$this->db->escape($title).")";
		$sql = "SELECT * FROM candidates WHERE position=1";
		$query = $this->db->query($sql);

		return $query->result();
	}
	
	public function get_secretary_candidates(){
		//building the query string
		$sql = "SELECT * FROM candidates WHERE position=2";
		$query = $this->db->query($sql);

		return $query->result();
	}
	
	public function get_treasurer_candidates(){
		//building the query string
		$sql = "SELECT * FROM candidates WHERE position=3";
		$query = $this->db->query($sql);

		return $query->result();
	}
	
	public function get_organizer_candidates(){
		//building the query string
		$sql = "SELECT * FROM candidates WHERE position=4";
		$query = $this->db->query($sql);
		
		return $query->result();
	}
}
?>
