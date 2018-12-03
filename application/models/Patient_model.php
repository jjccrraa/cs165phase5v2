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
			
			$data = array(
				'first_name'  => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name'   => $this->input->post('last_name'),
				'name_suffix' => $this->input->post('name_suffix'),
				'birthdate'   => $this->input->post('birthdate'),
				'sex' 		  => $this->input->post('sex')
			);

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