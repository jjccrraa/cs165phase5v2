<?php
	class Patient_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_patient(){
			//$query = $this->db->get_where('Type');
			//return $query->row_array();
			$query = $this->db->get("Patient"); 
			return $query->result();

		}

		public function add_patient(){
			
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
				'name_suffix' => $this->input->post('name_suffix'),
				'birthdate' => $this->input->post('birthdate'),
				'sex' => $this->input->post('sex')
			);

			return $this->db->insert('Patient', $data);
		}
	}