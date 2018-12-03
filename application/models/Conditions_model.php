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
			$data = array(
				'condition_name' = $this->input->post('condition_name') // condition_name
			);

			// return $this->db->insert('Conditions', $data);
			print_r($data);

			return $this->db->query("INSERT INTO Conditions(\"condition_name\") VALUES ( '".$this->db->escape_str($data)."')";


			
		}

		public function del_condition($id){
			$this -> db -> delete('Conditions', array('condition_id' => $id) );
			return;
		}

		public function edit_condition($id){
			$query = $this->db->get_where('Conditions', array('condition_id' => $id ));
			return $query->result();
		}

		public function update_condition(){
			$data = array(
				'condition_name' => $this->input->post('condition_name')
			);

			$this->db->where('condition_id', $this->input->post('condition_id'));
			return $this->db->update('Conditions', $data);
		}
	}