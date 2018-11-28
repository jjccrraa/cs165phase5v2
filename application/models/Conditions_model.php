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

		public function add_condition(){
			$data = array(
				'condition_name' => $this->input->post('condition_name')
			);

			return $this->db->insert('Conditions', $data);
		}
	}