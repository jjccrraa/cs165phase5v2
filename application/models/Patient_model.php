<?php
	class Patient_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_patient(){
			$query = $this->db->query("select * from Patient;");
			return $query->result();

		}

		public function add_patient(){
			
			/*
			$data = array(
				'first_name'  => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name'   => $this->input->post('last_name'),
				'name_suffix' => $this->input->post('name_suffix'),
				'birthdate'   => $this->input->post('birthdate'),
				'sex' 		  => $this->input->post('sex')
			);
			*/

			$first_name  = $this->input->post('first_name');
			$middle_name = $this->input->post('middle_name');
			$last_name   = $this->input->post('last_name');
			$name_suffix = $this->input->post('name_suffix');
			$birthdate   = $this->input->post('first_name');
			$sex         = $this->input->post('sex');
			
			// return $this->db->insert('Conditions', $data);
			
			$sql = "INSERT INTO Patient (first_name, middle_name, last_name, name_suffix, creation_date, birthdate, sex) VALUES ('" .$first_name. "', '" .$middle_name. "', '" .$last_name. "', '" .$name_suffix. "', CURRENT_TIMESTAMP, '" .$birthdate. "', '" .$sex. "');";
			$this->db->query($sql);
			return;	

			return $this->db->insert('Patient', $data);
		}

		public function del_patient($id){
			$this -> db -> delete('Patient', array('patient_id' => $id) );
			return;
		}
		
		public function edit_patient($id) {
			$query = $this->db->get_where('Patient', array('patient_id' => $id ));
			return $query->result();
		}

		public function update_patient() {

			$data = array(
				'first_name'  => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name'   => $this->input->post('last_name'),
				'name_suffix' => $this->input->post('name_suffix'),
				'birthdate'   => $this->input->post('birthdate'),
				'sex'		  => $this->input->post('sex')
			);

			$this->db->where('patient_id', $this->input->post('patient_id'));
			return $this->db->update('Patient', $data);
		}
		
	}