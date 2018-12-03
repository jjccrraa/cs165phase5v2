<?php
	class Conditions_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_condition(){
			$query = $this->db->query("select * from Conditions;");
			return $query->result();

		}

		public function add_condition(){
			$condition_name = $this->input->post('condition_name'); 
			$sql = "INSERT INTO Conditions (condition_name) VALUES ('" .$condition_name. "');";
			$this->db->query($sql);
			return;			
		}

		public function del_condition($id){
			$sql = "DELETE FROM Conditions WHERE condition_id = ".$id.";";
			$this->db->query($sql);
			return;
		}

		public function edit_condition($id){
			$sql = "SELECT * FROM Conditions WHERE condition_id=".$id.";";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_condition(){
			$condition_id = $this->input->post('condition_id');
			$condition_name = $this->input->post('condition_name');

			$sql = "UPDATE Conditions Set condition_name='".$condition_name."' WHERE condition_id=".$condition_id.";";
			$this->db->query($sql);
			return;
		}
	}