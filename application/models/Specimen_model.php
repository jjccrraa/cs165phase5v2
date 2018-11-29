<?php
	class Specimen_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_specimen(){
			//$query = $this->db->get_where('Type');
			//return $query->row_array();
			
			//$query = $this->db->get("Specimen"); 
			//return $query->result();

			$query = $this->db->select('*')
                  ->from('Specimen')
                  ->join('Patient', 'Patient.patient_id = Specimen.patient_id')
                  ->join('Conditions', 'Conditions.condition_id = Specimen.condition_id')
                  ->join('Type', 'Type.type_id = Specimen.type_id')
                  ->get();

			return $query->result();
		}

		public function del_patient($id){
			$this -> db -> delete('Specimen', array('specimen_id' => $id) );
			return;
		}
	}