<?php
	class Specimen_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_specimen(){
			/*$query = $this->db->select('*')
                  ->from('Specimen')
                  ->join('Patient', 'Patient.patient_id = Specimen.patient_id')
                  ->join('Pathologist', 'Pathologist.user_id = Specimen.user_id')
                  ->join('Conditions', 'Conditions.condition_id = Specimen.condition_id')
                  ->join('Type', 'Type.type_id = Specimen.type_id')
                  ->order_by('specimen_id', 'ASC')
                  ->get();
            */
            $query = $this->db->query("select * from Specimen,Patient,Pathologist,Conditions,Type 
				where Specimen.patient_id=Patient.patient_id 
				and Specimen.user_id=Pathologist.user_id 
				and Specimen.condition_id=Conditions.condition_id 
				and Specimen.type_id=Type.type_id;");
     
			return $query->result();
		}

		public function get_patient(){
			$query = $this->db->query("select * from Patient;");
			return $query->result();
		}

		public function get_pathologist(){
			$query = $this->db->query("select * from Pathologist;");
			return $query->result();
		}

		public function get_type(){
			$query = $this->db->query("select * from Type;");
			return $query->result();
		}

		public function get_conditions(){
			$query = $this->db->query("select * from Conditions;");
			return $query->result();
		}

		public function add_specimen(){
			$patient_id    = $this->input->post('patient_id');
			$user_id       = $this->input->post('user_id');
			$type_id       = $this->input->post('type_id');
			$condition_id  = $this->input->post('condition_id');
			$description   = $this->input->post('description');

			$sql = "INSERT INTO Specimen (patient_id, user_id, type_id, condition_id, description) VALUES ('" .$patient_id. "', '" .$user_id. "', '" .$type_id. "', '" .$condition_id. "', '" .$description. "');";
			$this->db->query($sql);
			return;	
		}

		public function del_specimen($id){
			$sql = "DELETE FROM Specimen WHERE specimen_id = ".$id.";";
			$this->db->query($sql);
			return;
		}

		public function edit_specimen($id) {
			$sql = "SELECT * FROM Specimen WHERE specimen_id = ".$id.";";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_specimen() {
			$specimen_id  = $this->input->post('specimen_id');
			$user_id      = $this->input->post('user_id');
			$patient_id   = $this->input->post('patient_id');
			$type_id      = $this->input->post('type_id');
			$condition_id = $this->input->post('condition_id');
			$description  = $this->input->post('description');

			$sql = "UPDATE Specimen Set 
			patient_id        ='".$patient_id. "', 
			user_id           ='".$user_id."', 
			type_id           ='".$type_id."', 
			condition_id      ='".$condition_id.  "', 
			description       ='".$description."' 
			WHERE specimen_id =".$specimen_id.";";
			$this->db->query($sql);
			return;
		}
	}