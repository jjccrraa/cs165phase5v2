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
			$first_name  = $this->input->post('first_name');
			$middle_name = $this->input->post('middle_name');
			$last_name   = $this->input->post('last_name');
			$name_suffix = $this->input->post('name_suffix');
			$birthdate   = $this->input->post('birthdate');
			$sex         = $this->input->post('sex');
			
			// return $this->db->insert('Conditions', $data);
			
			$sql = "INSERT INTO Patient (first_name, middle_name, last_name, name_suffix, creation_date, birthdate, sex) VALUES ('" .$first_name. "', '" .$middle_name. "', '" .$last_name. "', '" .$name_suffix. "', DEFAULT, '" .$birthdate. "', '" .$sex. "');";
			$this->db->query($sql);
			return;	
		}

		public function del_patient($id){
			$sql = "DELETE FROM Patient WHERE patient_id = ".$id.";";
			$this->db->query($sql);
			return;
		}
		
		public function edit_patient($id) {
			$sql = "SELECT * FROM Patient WHERE patient_id = ".$id.";";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_patient() {
			/*

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
			*/

			$patient_id  = $this->input->post('patient_id');
			$first_name  = $this->input->post('first_name');
			$middle_name = $this->input->post('middle_name');
			$last_name   = $this->input->post('last_name');
			$name_suffix = $this->input->post('name_suffix');
			$birthdate   = $this->input->post('birthdate');
			$sex		 = $this->input->post('sex');



			$sql = "UPDATE Patient Set 
			first_name  ='".$first_name. "', 
			middle_name ='".$middle_name."', 
			last_name   ='".$last_name.  "', 
			name_suffix ='".$name_suffix."',
			birthdate   ='".$birthdate.  "', 
			sex         ='".$sex.        "' 
			WHERE patient_id=".$patient_id.";";
			$this->db->query($sql);
			return;
		}
		
	}