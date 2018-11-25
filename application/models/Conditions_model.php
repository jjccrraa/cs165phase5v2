<?php
	class Conditions_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_condition(){
			//$query = $this->db->get_where('Type');
			//return $query->row_array();
			$query = $this->db->get("Conditions"); 
			return $query->result();

		}
	}