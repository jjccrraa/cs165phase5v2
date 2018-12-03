<?php
	class Pathologist_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_pathologist(){
			$query = $this->db->query("select * from Pathologist;");
			return $query->result();

		}

		public function add_pathologist(){
			$first_name_path = $this->input->post('first_name_path');
			$middle_name_path = $this->input->post('middle_name_path');
			$last_name_path   = $this->input->post('last_name_path');
			$name_suffix_path = $this->input->post('name_suffix_path');

			$sql = "INSERT INTO Pathologist  (first_name_path, middle_name_path, last_name_path, name_suffix_path) VALUES ('" .$first_name_path. "', '" .$middle_name_path. "', '" .$last_name_path. "', '" .$name_suffix_path. "');";
			$this->db->query($sql);
			return;		
		}

		public function del_pathologist($id){
			$sql = "DELETE FROM Pathologist WHERE user_id = ".$id.";";
			$this->db->query($sql);
			return;
		}
		
		public function edit_pathologist($id) {
			$sql = "SELECT * FROM Pathologist WHERE user_id = ".$id.";";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_pathologist() {
			$user_id = $this->input->post('user_id');

			$first_name_path   = $this->input->post('first_name_path');
			$middle_name_path = $this->input->post('middle_name_path');
			$last_name_path   = $this->input->post('last_name_path');
			$name_suffix_path = $this->input->post('name_suffix_path');


			$sql = "UPDATE Pathologist Set 
			first_name_path  ='".$first_name_path."', 
			middle_name_path ='".$middle_name_path."', 
			last_name_path   ='".$last_name_path."', 
			name_suffix_path ='".$name_suffix_path."'WHERE user_id=".$user_id.";";
			$this->db->query($sql);
			return;
		}
		
	}