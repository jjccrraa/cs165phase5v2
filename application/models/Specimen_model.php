<?php
	class Specimen_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_specimen(){
			//$query = $this->db->get_where('Type');
			//return $query->row_array();
			$query = $this->db->get("Specimen"); 
			return $query->result();

		}
	}