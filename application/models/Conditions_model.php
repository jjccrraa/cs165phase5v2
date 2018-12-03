<?php
	class Conditions_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_condition(){
			//$query = $this->db->get_where('Type');
			//return $query->row_array();
			$query = $this->db->query("select * from Conditions;");
			return $query->result();

		}

		public function add_condition(){
			/*$data = array(
				'condition_name' => $this->input->post('condition_name') // condition_name
			);
			*/

			$condition_name = $this->input->post('condition_name'); // condition_name
			

			// return $this->db->insert('Conditions', $data);
			
			$sql = "INSERT INTO Conditions (condition_name) VALUES ('" .$condition_name. "');";
			$this->db->query($sql);
			return;			
		}

		public function del_condition($id){
			$sql = "DELETE FROM Conditions WHERE condition_id = ".$id.";";
			$this->db->query($sql);
		}

		public function edit_condition($id){
			//$query = $this->db->get_where('Conditions', array('condition_id' => $id ));
			//return $query->result();

			$sql = "SELECT * FROM Conditions WHERE condition_id=".$id.";";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_condition(){
			//$data = array(
			//	'condition_name' => $this->input->post('condition_name')
			//);

			//$this->db->where('condition_id', $this->input->post('condition_id'));
			//return $this->db->update('Conditions', $data);

			$condition_id = $this->input->post('condition_id');
			$condition_name = $this->input->post('condition_name');

			$sql = "UPDATE Conditions Set condition_name='".$condition_name."' WHERE condition_id=".$condition_id.";";
			$this->db->query($sql);
			return;
		}
	}