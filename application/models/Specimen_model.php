<?php
	class Specimen_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_specimen(){
			$query = $this->db->select('*')
                  ->from('Specimen')
                  ->join('Patient', 'Patient.patient_id = Specimen.patient_id')
                  ->join('Conditions', 'Conditions.condition_id = Specimen.condition_id')
                  ->join('Type', 'Type.type_id = Specimen.type_id')
                  ->order_by('specimen_id', 'ASC')
                  ->get();

			return $query->result();
		}

		public function get_patient(){
			$query = $this->db->get("Patient"); 
			return $query->result();
		}

		public function get_type(){
			$query = $this->db->get("Type"); 
			return $query->result();
		}

		public function get_conditions(){
			$query = $this->db->get("Conditions"); 
			return $query->result();
		}

		public function add_specimen(){
			$data = array(
				'patient_id'   => $this->input->post('patient_id'),
				'type_id' 	   => $this->input->post('type_id'),
				'condition_id' => $this->input->post('condition_id'),
				'description'  => $this->input->post('description')
			);

			return $this->db->insert('Specimen', $data);
		}

		public function del_specimen($id){
			$this -> db -> delete('Specimen', array('specimen_id' => $id) );
			return;
		}

		public function edit_specimen($id) {
			$query = $this->db->get_where('Specimen', array('specimen_id' => $id ));
			return $query->result();
		}

		public function update_specimen() {

			$data = array(
				'patient_id'   => $this->input->post('patient_id'),
				'type_id' 	   => $this->input->post('type_id'),
				'condition_id' => $this->input->post('condition_id'),
				'description'  => $this->input->post('description')
			);

			$this->db->where('specimen_id', $this->input->post('specimen_id'));
			return $this->db->update('Specimen', $data);
		}
	}